@extends('basePortal')

@section('titulo', 'Exportadores')

@section('hojaEstilos')
    @livewireStyles
@endsection

@section('contenido')
    <div class="main">
        @livewire('live-directorio-export')
        <!--section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 mb-sm-40">
                        <a class="gallery" href="#">
                            <img src="{{asset('portal/images/exportadores/agro.jpg')}}" alt="Single Product Image"/>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="product-title font-alt">Empresa export Pack</h1>
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-sm-12">
                                <div class="description">
                                    <p>Nos dedicamos a transformar los derivados de grano de chia: .</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="alt-features-item direccion-contact mt-0">
                                <div class="alt-features-icon"><span class="icon-map"></span></div>
                                <h3 class="alt-features-title font-alt direccion-contact">Direccion</h3>
                                Av. Arce No 2017 esq. C. Goitia<br/>La Paz
                            </div>
                            <div class="alt-features-item direccion-contact mt-10 mt-xs-60">
                                <div class="alt-features-icon"><span class="icon-megaphone"></span></div>
                                <h3 class="alt-features-title font-alt">Contactenos</h3>
                                Email: info@caneb.org
                                <br/>Teléfonos: (591-2) 2443529
                                <br/>Fax: (591 - 2) 2441491 - Casilla: 12145
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-sm-12">
                                <div class="product_meta">
                                    Productos:<a href="#"> Chia, </a><a href="#">Harina de chia, </a><a href="#">aceite de chia</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section-->
        @include('portal.pie')
    </div>
@endsection

@section('javascripts')
    @livewireScripts
@endsection
