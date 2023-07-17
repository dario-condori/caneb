@extends('basePortal')

@section('titulo', 'Anuarios')

@section('contenido')
    <div class="main">
        <section class="module" id="news">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Anuarios</h2>
                    </div>
                </div>
                <div class="row multi-columns-row post-columns">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-entry">
                                <img src="{{ asset('portal/images/caneb/anuario2020-1.png') }}" alt="guia de exportacion">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-entry">
                                <img src="{{ asset('portal/images/caneb/anuario2020-2.png') }}" alt="guia de exportacion">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-entry">
                                <p class="module-title font-alt">Memoria Institucional 2020</p>
                            </div>
                            <div class="module-subtitle font-serif">
                                <a class="btn btn-success btn-circle btn-round" href="{{ asset('portal/documentos/memoria-institucional-caneb-2020.pdf') }}" target="_blank"><i class="fa fa-cog fa-spin"></i> Descarga gratuita</a>
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