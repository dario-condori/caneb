@extends('basePortal')

@section('titulo', 'Boletin Bilateral')

@section('contenido')
    <div class="main">
        <section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h2 class="module-title font-alt"></h2>
                        <h2 class="module-title font-alt">BOLETINES BILATERALES</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="row multi-columns-row post-columns">
                            <div class="col-md-6 col-lg-6">
                                <div class="post">
                                    <div class="post-header font-alt">
                                        <h2 class="post-title"><a href="#">Comercio Bilateral Bolivia-Argentina 2024</a></h2>
                                        <div class="post-meta">| 2024</div>
                                    </div>
                                    <div class="post-entry">
                                        <p>La balanza comercial entre Bolivia y Argentina experimentó una significativa reversión en su tendencia entre 2022 y 2023. En 2022, se registró un superávit comercial de 408,01 millones de dólares, con un saldo positivo que reflejaba una tendencia al alza en el valor de las exportaciones. Sin embargo, en 2023, esta situación cambió, presentando un déficit de -131,18 millones de dólares, debido a la caída tanto en las exportaciones como en las importaciones. Las exportaciones, que en 2022 alcanzaron los 1.744,38 millones de dólares, cayeron a 954,30 millones de dólares en 2023...</p>
                                    </div>
                                    <div class="post-more"><a class="more-link" href="{{asset('/storage/boletines-bilaterales/Comercio_Bilateral_Bolivia_Argentina.pdf')}}" target="_blank">Ver boletín</a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="post">
                                    <div class="post-header font-alt">
                                        <h2 class="post-title"><a href="#">Comercio Bilateral Bolivia-Brazil 2024</a></h2>
                                        <div class="post-meta">| 2024</div>
                                    </div>
                                    <div class="post-entry">
                                        <p>La balanza comercial entre Bolivia y Brasil ha mostrado una tendencia regular hacia saldos negativos, alcanzando un déficit de 86,19 millones de dólares en 2022 y 345,86 millones de dólares en 2023. Sin embargo, al analizar el período de enero a septiembre de los años 2023 y 2024, se observa un cambio significativo, registrándose un saldo positivo en este lapso. Este cambio es particularmente relevante, dado el comportamiento negativo en los años previos, y refleja una mejora potencial en las relaciones comerciales y en el desempeño de las exportaciones bolivianas hacia Brasil...</p>
                                    </div>
                                    <div class="post-more"><a class="more-link" href="{{asset('/storage/boletines-bilaterales/Comercio_Bilateral_Bolivia_Brasil.pdf')}}" target="_blank">Ver nota completa</a></div>
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