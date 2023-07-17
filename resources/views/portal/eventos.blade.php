@extends('basePortal')

@section('titulo', 'Actividades')

@section('contenido')
    <div class="main">
        <!--section class="module bg-dark" style="margin-top: 90px;height: 200px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h2 class="module-title font-alt">ACTIVIDADES</h2>
                    </div>
                </div>
            </div>
        </section-->
        <section class="module" id="eventos">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">EVENTOS</h2>
                    </div>
                </div>
                <div class="row multi-columns-row post-columns">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="post mb-20">
                            <div class="post-header font-alt">
                                <h2 class="post-title">RUEDA DE NEGOCIOS (22 Y 23 DE JUNIO)</h2>
                            </div>
                            <div class="post-header font-alt">
                                <h2 class="post-title">ORGANIZAN: CADEXCO - FEICOBOL - FEICOBOL BUSINESS</h2>
                            </div>
                            <div class="post-entry">
                                <p>No pierdas la oportunidad de desarrollar nuevas relaciones comerciales, alianzas estratégicas y contactar con posibles inversionistas.</p>
                            </div>
                            <div class="post-more">¡TE ESPERAMOS!</div>
                            <div class="post-more">Mas información:</div>
                            <ul>
                                <li>Teléfonos: (+591) 4- 4599419 (+591) 67598356</li>
                                <li>WhatsApp: https://bit.ly/3COcyBp</li>
                                <li>https://cadexco.bo/</li>
                                <li>promocion@cadexco.bo</li>
                                <li>#CADEXCO</li>
                                <li>#CANEB</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="post mb-20">
                            <div class="post-header font-alt">
                                <h2 class="post-title">Rueda de negocios</h2>
                            </div>
                                <!--img src="{{ asset('portal/images/caneb/evento1.jpg') }}"-->
                                <section class="home-section home-full-height photography-page" id="home">
                                    <div class="hero-slider">
                                      <ul class="slides">
                                        <li class="bg-dark" style="background-image:url(&quot;{{asset('portal/images/caneb/evento1.jpg') }}&quot;);"></li>
                                        <li class="bg-dark" style="background-image:url(&quot;{{asset('portal/images/caneb/evento2.jpg') }}&quot;);"></li>
                                        <li class="bg-dark" style="background-image:url(&quot;{{asset('portal/images/caneb/evento3.jpg') }}&quot;);"></li>
                                        <li class="bg-dark" style="background-image:url(&quot;{{asset('portal/images/caneb/evento4.jpg') }}&quot;);"></li>
                                        <li class="bg-dark" style="background-image:url(&quot;{{asset('portal/images/caneb/evento5.jpg') }}&quot;);"></li>
                                        <li class="bg-dark" style="background-image:url(&quot;{{asset('portal/images/caneb/evento6.jpg') }}&quot;);"></li>
                                      </ul>
                                    </div>
                                </section>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('portal.contacto')
        @include('portal.pie')
    </div>
@endsection