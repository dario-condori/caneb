@extends('basePortal')

@section('titulo', 'Inicio')

@section('contenido')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="home-section home-parallax home-fade home-full-height bg-dark-60 agency-page-header mt-80" id="home" data-background="portal/images/caneb/presentacion-caneb.png">
        <div class="titan-caption">
            <div class="caption-content">
                <div class="font-alt mb-30 titan-title-size-1">Exportaciones bolivianas</div>
                <div class="font-alt mb-40 titan-title-size-3"><span class="rotate">Facilitacion | simplificacion | servicios</span></div>
            </div>
        </div>
    </section>
    <div class="main">
        <section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Nuestra Misión y Visión</h2>
                        <div class="module-subtitle font-serif">Comprometidos con un desarrollo exportador fundado en la libre empresa.</div>
                    </div>
                </div>
                <div class="row multi-columns-row post-columns">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="post mb-20">
                            <div class="post-header">
                                <h2 class="mivi">Misión</h2>
                            </div>
                            <div class="post-entry">
                                <p class="mivi-text">Nuestra Misión es fomentar el desarrollo económico y social del país, sustentando la filosofía de la libre empresa como base esencial de este proceso, a través del apoyo al desarrollo de las exportaciones, la logística y las inversiones en Bolivia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="post mb-20">
                            <div class="post-header">
                                <h2 class="mivi">Visión</h2>
                            </div>
                            <div class="post-entry">
                                <p class="mivi-text">Nuestra Visión es fortalecer el desarrollo integral de las empresas afiliadas a nuestras Cámaras Departamentales, fomentando la oferta exportable boliviana, la facilitación comercial y promoviendo un nuevo perfil de inserción internacional para los productos bolivianos en mercados potenciales del exterior.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="module-subtitle font-serif">Fortalecemos el desarrollo integral empresarial para lograr una mayor oferta exportable, negocios más sencillos y mejores mercados.
                            <a class="btn btn-g btn-round" href="portfolio_boxed_gutter_col_3.html"><i class="fa fa-cog fa-spin"></i> Conoce nuestras ofertas</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="divider-w">
        @include('portal.contacto')
        @include('portal.camaras')
        @include('portal.pie')
    </div>
</div>
@endsection