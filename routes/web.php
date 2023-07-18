<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortalWebController;
use App\Http\Controllers\GraficosWebController;

Route::controller(PortalWebController::class)->name('portal.')->group(function(){
    Route::get('/', 'inicio')->name('inicio');
    Route::get('/sobre-nosotros', 'aCerca')->name('acerca');
    Route::get('/servicios', 'servicios')->name('servicios');
    Route::get('/actividades', 'actividades')->name('actividades');
    Route::get('/eventos', 'eventos')->name('eventos');
    Route::get('/noticias', 'noticias')->name('noticias');
    Route::get('/noticias/notas-prensa', 'notasPrensa')->name('notasPrensa');
    Route::get('/informacion', 'informacion')->name('informacion');
    Route::get('/informacion/direc-export', 'direcExport')->name('direc_export');
    Route::get('/informacion/estadisticas', 'estadisticas')->name('estadisticas');
    Route::get('/informacion/guia-export', 'guiaExport')->name('guia_export');
    Route::get('/publicaciones', 'publicaciones')->name('publicaciones');
    Route::get('/publicaciones/anuarios', 'anuarios')->name('anuarios');
    Route::get('/publicaciones/boletin/{id}', 'boletin')->name('boletin');
    Route::get('/contactos', 'contactos')->name('contactos');
    Route::post('/contactos/guardar', 'guardarContactoWeb')->name('guardarContactoWeb');
});

//---rutas para graficos
Route::controller(GraficosWebController::class)->name('graph.')->group(function(){
    Route::get('/graph/saldoComercial', 'saldoComercial')->name('saldoComercial');//saldo historico acumulado
    Route::get('/graph/exportSector', 'exportSector')->name('exportSector');//export sectores de una gestion
    Route::get('/graph/exportSectorComparativo', 'exportSectorComparativo')->name('exportSectorComparativo');//export sectores de 2 gestiones
    Route::get('/graph/exportSectorHistorico', 'exportSectorHistorico')->name('exportSectorHistorico');//para generar un historial
    Route::get('/graph/exportPrinProdPaiDepGes', 'exportPrinProdPaiDepGes')->name('exportPrinProdPaiDepGes');//para generar los x principales productos
    
    Route::get('/graph/importPrinProd', 'importPrinProd')->name('importPrinProd');//para generar los x principales productos
    Route::get('/graph/importCuode', 'importCuode')->name('importCuode');//para cuode torta

    Route::get('/tabla/exportTablaProdActividad', 'exportTablaProdActividad')->name('exportTablaProdActividad');//para tabla de datos
});