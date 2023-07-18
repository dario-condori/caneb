<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\cnegocios\BLLcomex;
use App\Http\Controllers\cnegocios\BLLcaneb;

class GraficosWebController extends Controller
{
	private $meses=array('','Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic');
	private $departamentos=array('BOLIVIA','CHUQUISACA','LA PAZ','COCHABAMBA','ORURO','POTOSÍ','TARIJA','SANTA CRUZ','BENI','PANDO','DESCONOCIDO');
	private $gestionActual=0;

	public function __construct()
	{
		$ous2 = new BLLcomex();

		$this->gestionActual=date('Y')-1;
		$query = DB::connection('mysql2')->select($ous2->Lgestiones());
		if($query){
			foreach ($query as $row) {
				$this->gestionActual=$row->gestion;
			}
		}
	}
	//---funcion para generar restricciones de variables
	public function sqlRestricciones($filtros, $prefi='e')
	{
		$ous2 = new BLLcomex();

		$restriccionSql='';
		$depto_desc=$this->departamentos[0];
		$pais_desc='';
		$via_desc='';
		$medio_desc='';

		$prefi.='.';
		foreach($filtros as $campo=>$valCampo){
			$restriccionSql=$restriccionSql.' AND '.$prefi.$campo.' IN ('.implode(',', $valCampo).')';
			//---nombre de departamento
			if($campo=="depto"){
				if(count($valCampo)==1)
					$depto_desc=$this->departamentos[$valCampo[0]];
				else 
					$depto_desc='VARIOS Departamentos';
			}
			//---nombre de pais
			if($campo=="pais"){
				if(count($valCampo)==1){
					$pais_desc='NNpais';
					$query = DB::connection('mysql2')->select($ous2->ListarPaises($valCampo[0]));
					foreach ($query as $row) {
						$pais_desc=$row->descripcion;
					}
				}else{ 
					$pais_desc='VARIOS Paises';
				}
			}
			//---nombre de vias
			if($campo=="via"){
				if(count($valCampo)==1){
					$via_desc='NNvia';
					$query = DB::connection('mysql2')->select($ous2->ListarVias($valCampo[0]));
					foreach ($query as $row) {
						$via_desc=$row->descripcion;
					}
				}else{ 
					$via_desc='VARIOS Vias';
				}
			}
			//---nombre de medios
			if($campo=="medio"){
				if(count($valCampo)==1){
					$medio_desc='NNmedio';
					$query = DB::connection('mysql2')->select($ous2->ListarMedioTransporte($valCampo[0]));
					foreach ($query as $row) {
						$medio_desc=$row->descripcion;
					}
				}else{ 
					$medio_desc='VARIOS Medios de transporte';
				}
			}
		}
		
		$datos=array('restriccionSql'=>$restriccionSql, 'campos'=>array('depto'=>$depto_desc, 'pais'=>$pais_desc, 'via'=>$via_desc, 'medio'=>$medio_desc));
		//dd($datos);
		return $datos;
	}

	//---datos grafico saldo comercial
    public function saldoComercial(Request $request)
    {
		$ous2 = new BLLcomex();

		//---gestion actual disponible segun la bbdd
		$ges_f=$gestionActual=$this->gestionActual;
		$ges_i=$ges_f-1;
		$ames=1;
		
		//---transformacion de filtros (restricciones where en bbdd)
		$filtros='';
		$filtros_imp='';
		//$res=$this->sqlRestricciones('{"param": [0]}');
		if(isset($request->filtros) && !empty($request->filtros)){
			$filtros=json_decode($request->filtros);
			$res=$this->sqlRestricciones($filtros);
			$res2=$this->sqlRestricciones($filtros, 'i');
			$filtros=$res['restriccionSql'];
			//---para importaciones
			$filtros_imp=$res2['restriccionSql'];
		}
		
		if(isset($request->gf) && !empty($request->gf)){
			if($request->gf>=1992 && $request->gf<=$gestionActual){//esta en el rango de gestiones diponibles
				$ges_f=$request->gf;
			}
		}

		if(isset($request->gi) && !empty($request->gi)){
			if($request->gi>=1992 && $request->gi<=$gestionActual){//esta en el rango de gestiones diponibles
				$ges_i=$request->gi;
			}
		}
		if($ges_i>$ges_f)$ges_i=$ges_f;
		
		if(isset($request->am) && !empty($request->am)){
			if($request->am>=1 && $request->am<=12){
				$ames=$request->am;
			}
		}
		
		//---construyendo el saldo comercial
		$g=0;
		$tabla=array();
		for($i=$ges_i; $i<=$ges_f; $i++){
			$g++;
			$tabla[0][$g]=$i;
			$tabla[1][$g]=0;
			$tabla[2][$g]=0;
			$tabla[3][$g]=0;
		}
		
		$g=0;
		for($i=$ges_i; $i<=$ges_f; $i++){
			$g++;
			//export 
			$query = DB::connection('mysql2')->select($ous2->ExportTotal($i, $ames, $filtros));
			foreach ($query as $row) {
				if(isset($row->valor) && !empty($row->valor))$valor=$row->valor;
				else $valor='';
				$tabla[0][$g]=$i;
				$tabla[1][$g]=$valor;
			}
			//import
			$query = DB::connection('mysql2')->select($ous2->ImportTotal($i, $ames, $filtros_imp));
			foreach ($query as $row) {
				$valor=$row->valor;
				$tabla[2][$g]=$valor;
			}
			$tabla[3][$g]=$tabla[1][$g]-$tabla[2][$g];
		}
		
		$gestiones = array();
		$p=-1;
		for($g=$ges_i;$g<=$ges_f;$g++){
			$p++;
			$gestiones[$p]=($tabla[0][($p+1)])*1;
		}
		$export = array();
		$p=-1;
		for($g=$ges_i;$g<=$ges_f;$g++){
			$p++;
			if(isset($tabla[1][($p+1)]) && !empty($tabla[1][($p+1)]))$export[$p]=number_format($tabla[1][($p+1)],2,'.','')*1;
			else $export[$p]='';
		}
		$import = array();
		$p=-1;
		for($g=$ges_i;$g<=$ges_f;$g++){
			$p++;
			if(isset($tabla[2][($p+1)]) && !empty($tabla[2][($p+1)]))$import[$p]=number_format($tabla[2][($p+1)],2,'.','')*1;
			else $import[$p]='';
		}
		$saldo = array();
		$p=-1;
		for($g=$ges_i;$g<=$ges_f;$g++){
			$p++;
			if(isset($tabla[3][($p+1)]) && !empty($tabla[3][($p+1)]))$saldo[$p]=number_format($tabla[3][($p+1)],2,'.','')*1;
			else $saldo[$p]='';
		}
		if($res['campos']['depto'])$titulo=$res['campos']['depto'].': Saldo comercial';
		if($res['campos']['pais'])$titulo.=' con '.$res['campos']['pais'];
		if($res['campos']['via'])$titulo.=', segun via '.$res['campos']['via'];
		if($res['campos']['medio'])$titulo.=', segun medio de transporte '.$res['campos']['medio'];
		$titulo.=', '.$ges_i.' - '.$ges_f.' (a '.$this->meses[$ames].')';
		$graph_data = array('gestiones'=>$gestiones, 'exportacion'=>$export, 'importacion'=>$import, 'saldo'=>$saldo, 'mes'=>$this->meses[$ames], 'periodo'=>$ges_i.' - '.$ges_f, 'titulo'=>$titulo);

        return json_encode($graph_data);
    }

	//---para generar x principales productos exportados en una gestion 
	public function exportPrinProdPaiDepGes(Request $request)
	{
		$ous2 = new BLLcomex();

		//---gestion actual disponible segun la bbdd
		$ges_f=$gestionActual=$this->gestionActual;
		$ges_i=$ges_f-1;
		$ames=1;
		$xpro=5;
		
		//---transformacion de filtros (restricciones where en bbdd)
		$filtros='';
		//$res=$this->sqlRestricciones('{"param": [0]}');
		if(isset($request->filtros) && !empty($request->filtros)){
			$filtros=json_decode($request->filtros);
			$res=$this->sqlRestricciones($filtros);
			$filtros=$res['restriccionSql'];
		}
		
		if(isset($request->gf) && !empty($request->gf)){
			if($request->gf>=1992 && $request->gf<=$gestionActual){//esta en el rango de gestiones diponibles
				$ges_f=$request->gf;
			}
		}
		
		if(isset($request->am) && !empty($request->am)){
			if($request->am>=1 && $request->am<=12){
				$ames=$request->am;
			}
		}
		
		if(isset($request->x) && !empty($request->x)){
			if($request->x > 0 && $request->x <5000){// entre 1 a 5000 items por tabla
				$xpro=$request->x;
			}
		}
		
		//export
		$total=0;
		$query = DB::connection('mysql2')->select($ous2->ExportTotal($ges_f, $ames, $filtros, 1));
		foreach ($query as $row) {
			$total=number_format($row->valor,2,'.','')*1;
		}
		$datos=array();
		$parcial=0;
		$query = DB::connection('mysql2')->select($ous2->ExportXPrinProdDeptoPaisGestionAmes($xpro, $ges_f, $ames, $filtros, 1));
		foreach ($query as $row) {
			$datos[]=number_format($row->valor,2,'.','')*1;
			$parcial+=number_format($row->valor,2,'.','')*1;
			$nandinas[]=$row->nandina.'-'.$row->descripcion;
		}
		$nandinas[]='Los demas';
		$datos[]=number_format($total-$parcial,2,'.','')*1;
		

		if($res['campos']['depto'])$titulo=$res['campos']['depto'].': Los '.$xpro.' principales productos exportados';
		if($res['campos']['pais'])$titulo.=' con '.$res['campos']['pais'];
		if($res['campos']['via'])$titulo.=', segun via '.$res['campos']['via'];
		if($res['campos']['medio'])$titulo.=', segun medio de transporte '.$res['campos']['medio'];
		$titulo.=', '.$ges_i.' - '.$ges_f.' (a '.$this->meses[$ames].')';
		$graph_data = array('nandinas'=>$nandinas, 'mes'=>$this->meses[$ames], 'titulo'=>$titulo, 'datos'=>$datos);

		return json_encode($graph_data);
	}

	//---datos grafico sectores por pais y depto de una gestion
    public function exportSector(Request $request)
    {
		$ous2 = new BLLcomex();
		
		//---gestion actual disponible segun la bbdd
		$ges_f=$gestionActual=$this->gestionActual;
		$ges_i=$ges_f-1;
		$ames=1;
		
		//---transformacion de filtros (restricciones where en bbdd)
		$filtros='';
		if(isset($request->filtros) && !empty($request->filtros)){
			$filtros=json_decode($request->filtros);
			$res=$this->sqlRestricciones($filtros);
			$filtros=$res['restriccionSql'];
		}
		
		if(isset($request->gf) && !empty($request->gf)){
			if($request->gf>=1992 && $request->gf<=$gestionActual){//esta en el rango de gestiones diponibles
				$ges_f=$request->gf;
			}
		}
		
		if(isset($request->am) && !empty($request->am)){
			if($request->am>=1 && $request->am<=12){
				$ames=$request->am;
			}
		}
		
		if(isset($request->x) && !empty($request->x)){
			if($request->x > 0 && $request->x <5000){// entre 1 a 5000 items por tabla
				$xpro=$request->x;
			}
		}
		
		//export
		$datos=array();
		$query = DB::connection('mysql2')->select($ous2->ExportSector($ges_f, $ames, $filtros, 1));
		foreach ($query as $row) {
			$datos[]=array($row->desc_corto, number_format($row->valor,2,'.','')*1);
		}

		if($res['campos']['depto'])$titulo=$res['campos']['depto'].': Exportación por sector económico';
		if($res['campos']['pais'])$titulo.=' a '.$res['campos']['pais'];
		if($res['campos']['via'])$titulo.=', segun via '.$res['campos']['via'];
		if($res['campos']['medio'])$titulo.=', segun medio de transporte '.$res['campos']['medio'];
		$titulo.=', '.$ges_i.' - '.$ges_f.' (a '.$this->meses[$ames].')';
		$graph_data = array('gestion'=>$ges_f, 'mes'=>$this->meses[$ames], 'titulo'=>$titulo, 'datos'=>$datos);

        return json_encode($graph_data);
    }

	//---datos grafico sectores por pais y depto de 2 gestion
    public function exportSectorComparativo(Request $request)
    {
        $ous = new BLLcaneb();
		$ous2 = new BLLcomex();
		
		//---gestion actual disponible segun la bbdd
		$ges_f=$gestionActual=$this->gestionActual;
		$ames=1;
		
		//---transformacion de filtros (restricciones where en bbdd)
		$filtros='';
		if(isset($request->filtros) && !empty($request->filtros)){
			$filtros=json_decode($request->filtros);
			$res=$this->sqlRestricciones($filtros);
			$filtros=$res['restriccionSql'];
		}
		
		if(isset($request->gf) && !empty($request->gf)){
			if($request->gf>=1992 && $request->gf<=$gestionActual){//esta en el rango de gestiones diponibles
				$ges_f=$request->gf;
			}
		}
		
		if(isset($request->am) && !empty($request->am)){
			if($request->am>=1 && $request->am<=12){
				$ames=$request->am;
			}
		}
		
		//export
		$datos=array();
		$categoria=array();
		$query = DB::connection('mysql2')->select($ous2->ExportSector($ges_f, $ames, $filtros, 1));
		foreach ($query as $row) {
			$datos[]=array($row->desc_corto, number_format($row->valor,2,'.','')*1);
			$categoria[]=$row->desc_corto;
		}

		$datos2=array();
		$query = DB::connection('mysql2')->select($ous2->ExportSector($ges_f-1, $ames, $filtros, 1));
		foreach ($query as $row) {
			$datos2[]=array($row->desc_corto, number_format($row->valor,2,'.','')*1);
			//$categoria[$row->sector-1]=$row->desc_corto;
		}

		if($res['campos']['depto'])$titulo=$res['campos']['depto'].': Exportación comparativa por sector económico';
		if($res['campos']['pais'])$titulo.=' a '.$res['campos']['pais'];
		if($res['campos']['via'])$titulo.=', segun via '.$res['campos']['via'];
		if($res['campos']['medio'])$titulo.=', segun medio de transporte '.$res['campos']['medio'];
		$titulo.=', '.($ges_f-1).' - '.$ges_f.' (a '.$this->meses[$ames].')';
		$graph_data = array('gestion'=>$ges_f, 'mes'=>$this->meses[$ames], 'titulo'=>$titulo, 'datos'=>$datos, 'datos2'=>$datos2, 'categoria'=>$categoria);

        return json_encode($graph_data);
    }

	//---para generar un historico de las exportaciones por sector 
	public function exportSectorHistorico(Request $request)
	{
		$ous2 = new BLLcomex();
		
		//---gestion actual disponible segun la bbdd
		$ges_f=$gestionActual=$this->gestionActual;
		$ges_i=$ges_f-1;
		$ames=1;
		
		//---transformacion de filtros (restricciones where en bbdd)
		$filtros='';
		if(isset($request->filtros) && !empty($request->filtros)){
			$filtros=json_decode($request->filtros);
			$res=$this->sqlRestricciones($filtros);
			$filtros=$res['restriccionSql'];
		}
		
		if(isset($request->gf) && !empty($request->gf)){
			if($request->gf>=1992 && $request->gf<=$gestionActual){//esta en el rango de gestiones diponibles
				$ges_f=$request->gf;
			}
		}
		
		if(isset($request->am) && !empty($request->am)){
			if($request->am>=1 && $request->am<=12){
				$ames=$request->am;
			}
		}

		//export
		$g=0;
		$exportSector = array();
		$gestiones = array();
		for($i=$ges_i; $i<=$ges_f; $i++){
			$g++;
			$query = DB::connection('mysql2')->select($ous2->ExportSector($i, $ames, $filtros, 1));
			foreach ($query as $row) {
				if(isset($row->valor) && !empty($row->valor))$valor=$row->valor;
				else $valor='';
				
				$gestiones[$g-1]=$i*1;
				$exportSector[$row->sector][$g-1]=number_format($valor,2,'.','')*1;
			}
		}

		if($res['campos']['depto'])$titulo=$res['campos']['depto'].': Exportación hitorica por sector económico';
		if($res['campos']['pais'])$titulo.=' a '.$res['campos']['pais'];
		if($res['campos']['via'])$titulo.=', segun via '.$res['campos']['via'];
		if($res['campos']['medio'])$titulo.=', segun medio de transporte '.$res['campos']['medio'];
		$titulo.=', '.$ges_i.' - '.$ges_f.' (a '.$this->meses[$ames].')';
		$graph_data = array('gestiones'=>$gestiones, 'exportSector'=>$exportSector, 'mes'=>$this->meses[$ames], 'periodo'=>$ges_i.' - '.$ges_f, 'titulo'=>$titulo);

        return json_encode($graph_data);
	}

	//---para generar x principales productos exportados en una gestion 
	public function importPrinProd(Request $request)
	{
		$ous2 = new BLLcomex();

		//---gestion actual disponible segun la bbdd
		$ges_f=$gestionActual=$this->gestionActual;
		$ges_i=$ges_f-1;
		$ames=1;
		$xpro=5;
		
		//---transformacion de filtros (restricciones where en bbdd)
		$filtros='';
		if(isset($request->filtros) && !empty($request->filtros)){
			$filtros=json_decode($request->filtros);
			$res=$this->sqlRestricciones($filtros);
			$filtros=$res['restriccionSql'];
		}
		
		if(isset($request->gf) && !empty($request->gf)){
			if($request->gf>=1992 && $request->gf<=$gestionActual){//esta en el rango de gestiones diponibles
				$ges_f=$request->gf;
			}
		}
		
		if(isset($request->am) && !empty($request->am)){
			if($request->am>=1 && $request->am<=12){
				$ames=$request->am;
			}
		}
		
		if(isset($request->x) && !empty($request->x)){
			if($request->x > 0 && $request->x <5000){// entre 1 a 5000 items por tabla
				$xpro=$request->x;
			}
		}
		
		//import
		$total=0;
		$query = DB::connection('mysql2')->select($ous2->ImportTotal($ges_f, $ames, $filtros));
		foreach ($query as $row) {
			$total=number_format($row->valor,2,'.','')*1;
		}
		$datos=array();
		$parcial=0;
		$query = DB::connection('mysql2')->select($ous2->ImportXPrinProd($xpro, $ges_f, $ames, $filtros));
		foreach ($query as $row) {
			$datos[]=number_format($row->valor,2,'.','')*1;
			$parcial+=number_format($row->valor,2,'.','')*1;
			$nandinas[]=$row->nandina.'-'.$row->descripcion;
		}
		$nandinas[]='Los demas';
		$datos[]=number_format($total-$parcial,2,'.','')*1;
		
		if($res['campos']['depto'])$titulo=$res['campos']['depto'].': Importación de los '.$xpro.' principales productos';
		if($res['campos']['pais'])$titulo.=' a '.$res['campos']['pais'];
		if($res['campos']['via'])$titulo.=', segun via '.$res['campos']['via'];
		if($res['campos']['medio'])$titulo.=', segun medio de transporte '.$res['campos']['medio'];
		$titulo.=', '.$ges_i.' - '.$ges_f.' (a '.$this->meses[$ames].')';
		$graph_data = array('nandinas'=>$nandinas, 'mes'=>$this->meses[$ames], 'titulo'=>$titulo, 'datos'=>$datos);

		return json_encode($graph_data);
	}

	//---datos grafico cuode por pais y depto de una gestion
    public function importCuode(Request $request)
    {
		$ous2 = new BLLcomex();

		//---gestion actual disponible segun la bbdd
		$ges_f=$gestionActual=$this->gestionActual;
		$ges_i=$ges_f-1;
		$ames=1;
		
		//---transformacion de filtros (restricciones where en bbdd)
		$filtros='';
		if(isset($request->filtros) && !empty($request->filtros)){
			$filtros=json_decode($request->filtros);
			$res=$this->sqlRestricciones($filtros);
			$filtros=$res['restriccionSql'];
		}
		
		if(isset($request->gf) && !empty($request->gf)){
			if($request->gf>=1992 && $request->gf<=$gestionActual){//esta en el rango de gestiones diponibles
				$ges_f=$request->gf;
			}
		}
		
		if(isset($request->am) && !empty($request->am)){
			if($request->am>=1 && $request->am<=12){
				$ames=$request->am;
			}
		}
		
		//import
		$datos=array();
		$query = DB::connection('mysql2')->select($ous2->ImportCuode(0, $ges_f, $ames, $filtros));
		foreach ($query as $row) {
			$datos[]=array($row->desc_corto, number_format($row->valor,2,'.','')*1);
		}

		if($res['campos']['depto'])$titulo=$res['campos']['depto'].': Importación según Uso o Destino';
		if($res['campos']['pais'])$titulo.=' a '.$res['campos']['pais'];
		if($res['campos']['via'])$titulo.=', segun via '.$res['campos']['via'];
		if($res['campos']['medio'])$titulo.=', segun medio de transporte '.$res['campos']['medio'];
		$titulo.=', '.$ges_i.' - '.$ges_f.' (a '.$this->meses[$ames].')';
		$graph_data = array('gestion'=>$ges_f, 'mes'=>$this->meses[$ames], 'titulo'=>$titulo, 'datos'=>$datos);

        return json_encode($graph_data);
    }

	//---datos grafico cuode por pais y depto de una gestion
    public function exportTablaProdActividad(Request $request)
    {
		$ous = new BLLcaneb();
		$ous2 = new BLLcomex();
		
		//---gestion actual disponible segun la bbdd
		$ges_f=$gestionActual=$this->gestionActual;
		$ames=1;
		$xpro=5;

		//---transformacion de filtros (restricciones where en bbdd)
		$filtros='';
		//$res=$this->sqlRestricciones('{"param": [0]}');
		if(isset($request->filtros) && !empty($request->filtros)){
			$filtros=json_decode($request->filtros);
			$res=$this->sqlRestricciones($filtros);
			$filtros=$res['restriccionSql'];
		}

		if(isset($request->gf) && !empty($request->gf)){
			if($request->gf>=1992 && $request->gf<=$gestionActual){//esta en el rango de gestiones diponibles
				$ges_f=$request->gf;
			}
		}

		if(isset($request->am) && !empty($request->am)){
			if($request->am>=1 && $request->am<=12){
				$ames=$request->am;
			}
		}

		if(isset($request->x) && !empty($request->x)){
			if($request->x > 0 && $request->x <5000){// entre 1 a 5000 items por tabla
				$xpro=$request->x;
			}
		}
		
		//export
		$total=0;
		$query = DB::connection('mysql2')->select($ous2->ExportTotal($ges_f, $ames, $filtros, 1));
		foreach ($query as $row) {
			$total=number_format($row->valor,2,'.','')*1;
		}
		$datos=array();
		$i=0;
		$subtotal=0;
		$columnas=array('No.','Sector','Actividad',$ges_f-1,$ges_f,'Var.%');
		$query = DB::connection('mysql2')->select($ous2->tablaCodactExport($xpro, $ges_f, $ames, $filtros, 1));
		foreach ($query as $row) {
			$i++;
			$codfila=$row->sector.'-'.$row->codact;
			if($row->valor<0)$valor=number_format($row->valor,10,'.','');
			else $valor=number_format($row->valor,2,'.','');
			$datos[$codfila]=array('nro'=>$i, 'sector'=>$row->desc_corto, 'codact'=>$row->codact_desc, 
				'gestion0'=>0, 'gestion1'=>$valor*1, 'variacion'=>0);
			$subtotal+=(number_format($row->valor,2,'.','')*1);
		}
		$datos['demas']=array('nro'=>'', 'sector'=>'', 'demas'=>'Los demás', 'gestion0'=>0, 'gestion1'=>number_format($total-$subtotal,2,'.','')*1, 'variacion'=>0);
		$datos['total']=array('nro'=>'', 'sector'=>'', 'total'=>'Total', 'gestion0'=>0, 'gestion1'=>number_format($total,2,'.','')*1, 'variacion'=>0);

		$total=0;
		$query = DB::connection('mysql2')->select($ous2->ExportTotal($ges_f-1, $ames, $filtros, 1));
		foreach ($query as $row) {
			$total=number_format($row->valor,2,'.','')*1;
		}
		//dd($datos);
		$query = DB::connection('mysql2')->select($ous2->tablaCodactExport(100, $ges_f-1, $ames, $filtros, 1));
		foreach ($query as $row) {
			$codfila=$row->sector.'-'.$row->codact;
			if(array_key_exists($codfila, $datos))
				$datos[$codfila]['gestion0']=(number_format($row->valor,2,'.','')*1);
		}
		$ii=0;
		$subtotal=0;
		foreach ($datos as $k=>$fil){
			$ii++;
			$subtotal+=(number_format($fil['gestion0'],2,'.','')*1);
			//dump($datos[$k]);
			if(isset($fil['gestion1']) && !empty($fil['gestion1'])){
				if($fil['gestion0']){
					$datos[$k]['variacion']=number_format(((($fil['gestion1']/$fil['gestion0'])-1)*100),2,'.','')*1;
				}else{
					$datos[$k]['variacion']=number_format(100,2,'.','')*1;
				}
			}else{
				$datos[$k]['variacion']=number_format(-100,2,'.','');
			}
				
			//if($ii == $xpro || $ii == $i)break;
		}
		if($datos['demas']['gestion0']==0 && $datos['demas']['gestion1']==0)
			unset($datos['demas']);

		$titulo='';//$this->departamentos[$dep].(': Exportación por Sector Económico'.$con.$segun.$segun_med.$segun_area.', ').($ges_f-1).'-'.$ges_f.' (a '.$this->meses[$ames].')';
		$tab_data = array('gestion'=>$ges_f, 'mes'=>$this->meses[$ames], 'titulo'=>$titulo, 'columnas'=>$columnas, 'datos'=>$datos);
		//dd($datos);
		return view('graficos.tabla', [
            'tabla' => $tab_data,
			'xpro'=>$xpro
        ]);
	}
}
