@extends('basePortal')

@section('titulo', 'Actividades')

@section('contenido')
    <div class="main">
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
                                <h2 class="post-title">INTELIGENCIA DE MERCADOS (8, 9 Y 10 DE ABRIL)</h2>
                            </div>
                            <div class="post-header font-alt">
                                <h2 class="post-title">Análisis de datos para internacionalizar tu negocio</h2>
                            </div>
                            <div class="post-entry">
                                <p>Día 1. Oportunidades comerciales en mercados en expansión. Análisis de patrones y tendencias en mercados internacionales</p>
                            </div>
                            <div class="post-entry">
                                <p>Día 2. Detección y Evaluación de mercados de nicho Identificación y Comprensión de oportunidades estratégicas en mercados segmentados.</p>
                            </div>
                            <div class="post-entry">
                                <p>Día 3. Evaluación de condiciones de entrada a mercados objetivo. Pasos y formalidades de acceso a mercados genéricos y de nicho.</p>
                            </div>
                            <div class="post-more">¡TE ESPERAMOS!</div>
                            <div class="post-more">Mas información:</div>
                            <ul>
                                <li>Teléfonos: (+591) 2444247 / (+591) 68271656</li>
                                {{-- <li>WhatsApp: https://bit.ly/3COcyBp</li> --}}
                                <li>Av. Arce, esquina Goitia No. 2017</li>
                                <li>segundo piso, La Paz - Bolivia</li>
                                {{-- <li>#CADEXCO</li> --}}
                                <li>#CANEB</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="post">
                            <div class="post-images-slider">
                                <ul class="slides">
                                    <li><img src="{{asset('/storage/eventos/caneb-im-1.jpg')}}" alt="caneb-im"/></li>
                                    <li><img src="{{asset('/storage/eventos/caneb-im-2.jpg')}}" alt="caneb-im"/></li>
                                    <li><img src="{{asset('/storage/eventos/caneb-im-3.jpg')}}" alt="caneb-im"/></li>
                                    <li><img src="{{asset('/storage/eventos/caneb-im-4.jpg')}}" alt="caneb-im"/></li>
                                </ul>
                            </div>
                            <div class="post-more"><a class="more-link" href="#">Ver programa</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('portal.contacto')
        @include('portal.pie')
    </div>
@endsection