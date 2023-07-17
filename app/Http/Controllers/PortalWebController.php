<?php

namespace App\Http\Controllers;

use App\Models\ContactoWeb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\cnegocios\BLLcaneb;

class PortalWebController extends Controller
{
    //---home de la pagina web
    public function inicio()
    {
        
        return view('portal.inicio');
    }

    //---informacion sobre caeb
    public function aCerca()
    {
        return view('portal.acerca');
    }

    //---servicios de caneb
    public function servicios()
    {
        return view('portal.servicios');
    }

    //---actividades o eventos de caneb
    public function actividades()
    {
        return 'actividades';
    }

    //---actividades/eventos de caneb
    public function eventos()
    {
        return view('portal.eventos');
    }

    //---sector de noticias
    public function noticias()
    {
        return 'noticias';
    }

    //---sector de noticias
    public function notasPrensa()
    {
        return view('portal.notasPrensa');
    }

    //---sector de informacion
    public function informacion()
    {
        return 'informacion';
    }

    //---directorio de empresas exportadoras
    public function direcExport()
    {
        return view('portal.direcExport');
    }

    //---directorio de empresas exportadoras
    public function estadisticas()
    {
        $ous = new BLLcaneb();

        $query = DB::connection()->select($ous->datosBoletin(1));//---el 1 es siempre las estadisticas
        foreach ($query as $row) {
            $bolContenido[$row->seccion][$row->columna]=array(
                'id'=>$row->id,
                'vista'=>$row->vista,
                'conf_graph_id'=>$row->config_graficos_id,
                'ancho'=>$row->ancho,
                'cantidad_item'=>$row->cantidad_item,
                'gestion_ini'=>$row->gestion_ini,
                'gestion_fin'=>$row->gestion_fin,
                'filtros'=>json_decode($row->filtros, true)
            );
        }
        //dd($bolContenido);
        return view('portal.estadisticas', ['contenido'=>$bolContenido]);
    }

    //---documento de guia de exportacoion
    public function guiaExport()
    {
        return view('portal.guiaExport');
    }

    //---sector de publicaciones
    public function publicaciones()
    {
        return 'publicaciones';
    }

    //---sector de publicaciones anuarios
    public function anuarios()
    {
        return view('portal.anuarios');
    }

    //---sector de publicaciones boletin especifico
    public function boletin($id)
    {
        $ous = new BLLcaneb();

		$boletin=array();
        $bolContenido=array();
        $titulo='-';

		$query = DB::connection()->select($ous->datosBoletin($id));
        foreach ($query as $row) {
            $bolContenido[$row->seccion][$row->columna]=array(
                'id'=>$row->id,
                'vista'=>$row->vista,
                'conf_graph_id'=>$row->config_graficos_id,
                'ancho'=>$row->ancho,
                'cantidad_item'=>$row->cantidad_item,
                'gestion_ini'=>$row->gestion_ini,
                'gestion_fin'=>$row->gestion_fin,
                'filtros'=>json_decode($row->filtros, true)
            );
            $titulo=$row->titulo;
        }
        $boletin=array('titulo'=>$titulo, 'contenido'=>$bolContenido);
        //dd($boletin);
        return view('portal.boletin2', [
            'boletin' => $boletin
        ]);
    }

    //---sector de contactos
    public function contactos()
    {
        return 'contactos';
    }

    //---para guardar los mensajes enviados desde el portal
    public function guardarContactoWeb(Request $request)
    {
        $contactoWeb = new ContactoWeb();

        $contactoWeb->nombre = $request->nombre;
        $contactoWeb->email = $request->email;
        $contactoWeb->asunto = $request->asunto;
        $contactoWeb->mensaje = $request->mensaje;

        $contactoWeb->save();

        return '<div class="alert alert-info" role="alert">
            <strong>Aviso: </strong> Mensaje enviado satisfactoriamente !!
        </div>';
    }
}
