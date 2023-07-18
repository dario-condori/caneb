<?php
namespace App\Http\Controllers\cnegocios;

class BLLcaneb
{
	//---empresas export de logistica
	function listadoGraficos($id=0){
		if($id){
			$graph=' AND cg.id='.$id.' ';
		}else{
			$graph=' ';
		}
		$sql='SELECT cg.id, cg.flujo, cg.activo, cg.descripcion, cg.vista, cg.funcion, cg.filtros
			FROM config_graficos cg
			WHERE cg.activo=1
			'.$graph.'
			ORDER BY 1';
		return $sql;
	}

    //---empresas export
	function cantidadEmpresasExport(){
		$sql="SELECT COUNT(*) AS cantidad
            FROM empresas_export";
		return $sql;
	}

	//---empresas export de logistica
	function cantidadEmpresasExportLogic(){
		$sql="SELECT COUNT(*) AS cantidad
            FROM empresas_logistica";
		return $sql;
	}

	//---Lista de esquemas
	function listaEsquemas(){
		$sql="SELECT be.id, be.descripcion, be.nota, be.nro_capas
			FROM boletin_esquema be";
		return $sql;
	}

	//---Lista de categorias
	function listaCategorias(){
		$sql="SELECT bc.id, bc.descripcion, bc.sigla
			FROM boletin_categoria bc";
		return $sql;
	}

	//---BOLETINES
	function listaBoletines(){
		$sql="SELECT b.id, b.titulo, b.descripcion, b.categoria_id, bc.descripcion AS 'categoria', bc.sigla, b.esquema_id, be.descripcion AS 'esquema', be.nota, be.nro_capas
			FROM boletines b, boletin_categoria bc, boletin_esquema be
			WHERE b.categoria_id=bc.id
			AND b.esquema_id=be.id";
		return $sql;
	}
	//---Detalles de un boletin
	function datosBoletin($id){
		$sql='SELECT bc.id, bc.boletin_id, bc.capa, bc.seccion, bc.columna, bc.ancho, bc.elemento_id, bc.config_graficos_id, bc.cantidad_item, bc.gestion_ini, bc.gestion_fin, bc.ames, bc.filtros, cg.vista, cg.funcion, b.titulo
		FROM boletin_contenido bc, config_graficos cg, boletines b
		WHERE bc.boletin_id='.$id.'
		AND bc.config_graficos_id=cg.id
		AND bc.boletin_id=b.id';
		return $sql;
	}
}