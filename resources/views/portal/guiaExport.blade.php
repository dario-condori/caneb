@extends('basePortal')

@section('titulo', 'Guia de Exportación')

@section('contenido')
    <div class="main">
        <section class="module" id="news">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Guía de exportación</h2>
                    </div>
                </div>
                <div class="row multi-columns-row post-columns">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-entry">
                                <img src="{{ asset('portal/images/caneb/guiaExport1.png') }}" alt="guia de exportacion">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-entry">
                                <img src="{{ asset('portal/images/caneb/guiaExport2.png') }}" alt="guia de exportacion">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-header">
                                <h2 class="mivi">¿Qué significa exportar?</h2>
                            </div>
                            <div class="post-entry">
                                <p class="mivi-text">La exportación es el procedimiento de envío legal de mercancías nacionales para su uso o consumo en el extranjero, pudiendo ser entendida también como la venta de una mercancía (bien o servicio) producida en un país determinado bajo un marco jurídico e institucional nacional y la compra de la misma en otro país constituyéndose para éste, como una importación.</p>
                            </div>
                            <div class="module-subtitle font-serif">
                                <a class="btn btn-success btn-circle btn-round" href="{{ asset('portal/documentos/guia-de-exportación-2017.pdf') }}" target="_blank"><i class="fa fa-cog fa-spin"></i> Descarga gratuita</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        
                    </div>
                </div>
            </div>
        </section>
        <hr class="divider-w">
        @include('portal.contacto')
        @include('portal.pie')
    </div>
@endsection