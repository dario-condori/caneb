@extends('basePortal')

@section('titulo', 'Actividades')

@section('contenido')
    <div class="main">
        <section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h2 class="module-title font-alt"></h2>
                        <h2 class="module-title font-alt">NOTAS DE PRENSA</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="row multi-columns-row post-columns">
                            <div class="col-md-6 col-lg-6">
                                <div class="post">
                                    <div class="post-header font-alt">
                                        <h2 class="post-title"><a href="#">Exportadores ven con preocupación altos costos de fletes marítimos</a></h2>
                                        <div class="post-meta">| 08 Septiembre 2021</div>
                                    </div>
                                    <div class="post-entry">
                                        <p>A tiempo de hacer un balance del desempeño de las exportaciones a julio de 2021, a través de su Gerente General, expresó la preocupación del sector por causa del incremento de fletes de transporte marítimo, lo que incidiría negativamente sobre la competitividad de las exportaciones...</p>
                                    </div>
                                    <div class="post-more"><a class="more-link" href="#">Ver nota completa</a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="post">
                                    <div class="post-header font-alt">
                                        <h2 class="post-title"><a href="#">CANEB evalúa positivamente el primer semestre en exportaciones</a></h2>
                                        <div class="post-meta">| 28 Julio 2021</div>
                                    </div>
                                    <div class="post-entry">
                                        <p>“Hay un claro impulso a la recuperación económica que viene de la mano del sector exportador”, afirmó Danilo Velasco, Presidente de la Cámara Nacional de Exportadores de Bolivia - CANEB, al momento de evaluar como muy positivo el primer semestre de las exportaciones bolivianas...</p>
                                    </div>
                                    <div class="post-more"><a class="more-link" href="#">Ver nota completa</a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="post">
                                    <div class="post-header font-alt">
                                        <h2 class="post-title"><a href="#">Exportadores observan con recelo la recuperación del las exportaciones</a></h2>
                                        <div class="post-meta">| 24 Junio 2021</div>
                                    </div>
                                    <div class="post-entry">
                                        <p>El sector exportador informó que reciben con cautela los datos publicados por Instituto Nacional de Estadística – INE que muestran un crecimiento de las exportaciones del 51,2%....</p>
                                    </div>
                                    <div class="post-more"><a class="more-link" href="#">Ver nota completa</a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="post">
                                    <div class="post-header font-alt">
                                        <h2 class="post-title"><a href="#">CANEB se reúne con el VICEPRESIDENTE</a></h2>
                                        <div class="post-meta">| 17 Junio 2021</div>
                                    </div>
                                    <div class="post-entry">
                                        <p>El sector exportador nacional, representado por el presidente de CANEB, Danilo Velasco, celebró una reunión con el Vicepresidente del Estado Plurinacional de Bolivia, David desburocratización, logística y mercados....</p>
                                    </div>
                                    <div class="post-more"><a class="more-link" href="#">Ver nota completa</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination font-alt">
                            <a href="#"><i class="fa fa-angle-left"></i></a>
                            <a class="active" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
                        <div class="widget">
                            <h5 class="widget-title font-alt">Categorias</h5>
                            <div class="tags font-serif">
                                <a href="#" rel="tag">Internacional</a>
                                <a href="#" rel="tag">Nacional</a>
                                <a href="#" rel="tag">Regional</a>
                                <a href="#" rel="tag">Departamental</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('portal.contacto')
        @include('portal.pie')
    </div>
@endsection