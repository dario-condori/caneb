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
                    <div class="col-sm-12 col-md-2 col-lg-2"></div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-entry">
                                <img src="{{asset('/storage/memorias/anuario-2024.png')}}" width="90%" alt="Anuario 2024">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-entry">
                                <p class="module-title font-alt">Memoria Institucional 2024</p>
                            </div>
                            <div class="module-subtitle font-serif">
                                <a class="btn btn-success btn-circle btn-round" href="{{ asset('/storage/memorias/anuario-2024.pdf') }}" target="_blank">
                                    <i class="fa fa-cog fa-spin"></i> Descargar 2024
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row multi-columns-row post-columns">
                    <div class="col-sm-12 col-md-2 col-lg-2"></div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-entry">
                                <img src="{{asset('/storage/memorias/anuario-2023.png')}}" width="90%" alt="Anuario 2023">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-entry">
                                <p class="module-title font-alt">Memoria Institucional 2023</p>
                            </div>
                            <div class="module-subtitle font-serif">
                                <a class="btn btn-success btn-circle btn-round" href="{{ asset('/storage/memorias/anuario-2023.pdf') }}" target="_blank">
                                    <i class="fa fa-cog fa-spin"></i> Descargar 2023
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row multi-columns-row post-columns">
                    <div class="col-sm-12 col-md-2 col-lg-2"></div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-entry">
                                <img src="{{asset('/storage/memorias/anuario-2022.png')}}" width="90%" alt="Anuario 2022">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-entry">
                                <p class="module-title font-alt">Memoria Institucional 2022</p>
                            </div>
                            <div class="module-subtitle font-serif">
                                <a class="btn btn-success btn-circle btn-round" href="{{ asset('/storage/memorias/anuario-2022.pdf') }}" target="_blank">
                                    <i class="fa fa-cog fa-spin"></i> Descargar 2022
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row multi-columns-row post-columns">
                    <div class="col-sm-12 col-md-2 col-lg-2"></div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-entry">
                                <img src="{{asset('/storage/memorias/anuario-2021.png')}}" width="90%" alt="Anuario 2021">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-entry">
                                <p class="module-title font-alt">Memoria Institucional 2021</p>
                            </div>
                            <div class="module-subtitle font-serif">
                                <a class="btn btn-success btn-circle btn-round" href="{{ asset('/storage/memorias/anuario-2021.pdf') }}" target="_blank">
                                    <i class="fa fa-cog fa-spin"></i> Descargar 2021
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row multi-columns-row post-columns">
                    <div class="col-sm-12 col-md-2 col-lg-2"></div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-entry">
                                <img src="{{asset('/storage/memorias/anuario-2020.png')}}" width="90%" alt="Anuario 2020">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-entry">
                                <p class="module-title font-alt">Memoria Institucional 2020</p>
                            </div>
                            <div class="module-subtitle font-serif">
                                <a class="btn btn-success btn-circle btn-round" href="{{ asset('/storage/memorias/anuario-2020.pdf') }}" target="_blank">
                                    <i class="fa fa-cog fa-spin"></i> Descargar 2020
                                </a>
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