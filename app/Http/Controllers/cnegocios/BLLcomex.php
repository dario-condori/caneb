<?php
namespace App\Http\Controllers\cnegocios;

class BLLcomex{
    //---lista de gestiones disponibles
	function Lgestiones(){
		$sql="SELECT g.id_gestion AS 'gestion'
			FROM gestiones g
			GROUP BY 1";
		return $sql;
	}
    //---el ultimo mes diponible de la gestion actual
    function UltimoMesGestion($ges){
		$sql="SELECT MAX(e.mes) AS 'mes'
			FROM exportacion".$ges." e";
		return $sql;
	}
	//---para dashboard inicial
	function NroGestiones($n){
		$sql="SELECT g.id_gestion AS 'gestion'
			FROM gestiones AS g
			ORDER BY 1 DESC
			LIMIT $n";
		return $sql;
	}
	//---para listar pais o paises
	function ListarPaises($pais){
		if($pais)$v_pais=' WHERE p.pais='.$pais;
		else $v_pais=' ';
		$sql="SELECT p.pais, p.descripcion FROM paises p ".$v_pais;
		return $sql;
	}
	//---para listar vias
	function ListarVias($via){
		if($via)$v_via=' WHERE v.via='.$via;
		else $v_via=' ';
		$sql="SELECT v.via, v.descripcion, v.antes FROM vias v ".$v_via;
		return $sql;
	}
	//---para listar medios
	function ListarMedioTransporte($medio){
		if($medio)$v_medio=' WHERE mt.medio='.$medio;
		else $v_medio=' ';
		$sql="SELECT mt.medio, mt.descripcion, mt.medio_anb FROM medio_trans mt ".$v_medio;
		return $sql;
	}
	//---export total categoria definitvo=1, reexport=2, efect person=3 total=0
	function ExportTotal($gestion, $ames, $filtros, $categoria=0){
		if($categoria){ $categoria='='.$categoria.' '; }
		else{ $categoria=' '; }

		$sql='SELECT e.gestion, Sum(e.valor)/1000000 AS "valor", Sum(e.kilbru)/1000 AS "Toneladas"
			FROM exportacion'.$gestion.' e
			WHERE e.categoria'.$categoria.' 
			AND e.mes<='.$ames.' 
			'.$filtros.'
			GROUP BY 1';
		return $sql;
	}

	function ImportTotal($gestion, $ames, $filtros){
		$sql='SELECT i.gestion, SUM(i.fro)/1000000 AS "valor", SUM(i.kilos)/1000 AS "toneladas"
			FROM importacion'.$gestion.' i
			WHERE i.mes<='.$ames.' 
			'.$filtros.'
			GROUP BY 1';
		return $sql;
	}

	//---estructura segun sector de un determinado gestion
	function ExportSector($gestion, $ames, $filtros, $categoria=0){
		if($categoria){ $categoria='='.$categoria.' '; }
		else{ $categoria=' '; }

		$sql='SELECT e.gestion, e.sector, s.desc_corto, SUM(e.valor)/1000000 AS "valor", SUM(e.kilbru)/1000 AS "toneladas"
			FROM exportacion'.$gestion.' e, clas_ine_sector s
			WHERE e.categoria'.$categoria.' 
			AND e.sector=s.id
			AND e.mes<="'.$ames.'"
			'.$filtros.'
			GROUP BY 1,2,3
			ORDER BY 2 ASC';
		//echo($sql);
		return $sql;
	}

	//---estructura segun sector de un determinado gestion
	function tablaCodactExport($xprod, $gestion, $ames, $filtros, $categoria=0){
		if($categoria){ $categoria='='.$categoria.' '; }
		else{ $categoria=' '; }

		$sql='SELECT e.gestion, e.sector, s.desc_corto, e.codact, ca.descripcion AS "codact_desc", SUM(e.valor)/1000000 AS "valor", SUM(e.kilbru)/1000 AS "toneladas"
			FROM exportacion'.$gestion.' e, clas_ine_sector s, clas_ine_actividad ca
			WHERE e.categoria'.$categoria.' 
			AND e.sector=s.id
			AND e.codact=ca.codact
			AND e.mes<="'.$ames.'"
			'.$filtros.'
			GROUP BY 1,2,3,4,5
			ORDER BY 6 DESC
			LIMIT '.$xprod;
		//echo($sql);
		return $sql;
	}

	//---export de X principales productos por depto, pais, gestion
	function ExportXPrinProdDeptoPaisGestionAmes($xprod, $gestion, $ames, $filtros, $categoria=0){
		if($categoria){ $categoria='='.$categoria.' '; }
		else{ $categoria=' '; }

		$sql='SELECT e.gestion, e.nandina, nd.descripcion, SUM(e.valor)/1000000 AS "valor", SUM(e.kilbru)/1000 AS "toneladas"
			FROM exportacion'.$gestion.' e, nandina_detalle nd
			WHERE e.categoria'.$categoria.' 
			AND e.nandina=nd.nandina
			AND e.mes<="'.$ames.'"
			'.$filtros.'
			GROUP BY 1,2,3
			ORDER BY 4 DESC
			LIMIT '.$xprod;
		//echo $sql;
		return $sql;
	}

	//---import de X principales productos por depto, pais, gestion
	function ImportXPrinProd($xprod, $gestion, $ames, $filtros){
		$sql='SELECT i.gestion, i.nandina, nd.descripcion, SUM(i.fro)/1000000 AS "valor", SUM(i.kilos)/1000 AS "toneladas"
			FROM importacion'.$gestion.' i, nandina_detalle nd
			WHERE i.nandina=nd.nandina
			AND i.mes<="'.$ames.'"
			'.$filtros.'
			GROUP BY 1,2,3
			ORDER BY 4 DESC
			LIMIT '.$xprod;
		//echo $sql;
		return $sql;
	}

	//---estructura segun cuode de un determinado gestion
	function ImportCuode($xprod, $gestion, $ames, $filtros){
		$sql='SELECT i.gestion, i.cuode_seccion, cs.desc_corto, SUM(i.fro)/1000000 AS "valor", SUM(i.kilos)/1000 AS "toneladas"
			FROM importacion'.$gestion.' i, clas_cuode_seccion cs
			WHERE i.cuode_seccion=cs.id_seccion
			AND i.mes<="'.$ames.'"
			'.$filtros.'
			GROUP BY 1,2,3
			ORDER BY 4 DESC
			';
		return $sql;
	}
}