@extends('basePortal')

@section('titulo', 'Boletin Bilateral')

@section('contenido')
    <div class="main">
        <section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h2 class="module-title font-alt"></h2>
                        <h2 class="module-title font-alt">BOLETINES DE PRODUCTOS</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="row multi-columns-row post-columns">
                            <div class="col-md-6 col-lg-6">
                                <div class="post">
                                    <div class="post-header font-alt">
                                        <h2 class="post-title"><a href="#">Exportaciones de Artesanías en Cerámica y Madera</a></h2>
                                        <div class="post-meta">| 2024</div>
                                    </div>
                                    <div class="post-entry">
                                        <p>Las exportaciones de Artesanías en Cerámica y Madera desde Bolivia han experimentado fluctuaciones tanto en valor como en volumen desde 2013. En términos de valor, el máximo histórico se registró en 2022, con 112.279,30 dólares, sin embargo, desde entonces ha presentado una tendencia a disminuir, alcanzando 25.545,24 dólares en 2023...</p>
                                    </div>
                                    <div class="post-more"><a class="more-link" href="{{asset('/storage/boletines-productos/Boletin_Alasitas.pdf')}}" target="_blank">Ver boletín</a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="post">
                                    <div class="post-header font-alt">
                                        <h2 class="post-title"><a href="#">Evolución de las exportaciones de Castaña</a></h2>
                                        <div class="post-meta">| 2024</div>
                                    </div>
                                    <div class="post-entry">
                                        <p>Las exportaciones de castaña desde Bolivia han experimentado fluctuaciones tanto en valor como en volumen desde 2013. En términos de valor, el máximo histórico se registró en 2018, con 221,19 millones de dólares, sin embargo, desde entonces ha presentado una tendencia a disminuir, alcanzando 115,41 millones de dólares en 2023...</p>
                                    </div>
                                    <div class="post-more"><a class="more-link" href="{{asset('/storage/boletines-productos/Boletin_Castaña.pdf')}}" target="_blank">Ver boletín</a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="post">
                                    <div class="post-header font-alt">
                                        <h2 class="post-title"><a href="#">Exportación de Cacao y sus derivados</a></h2>
                                        <div class="post-meta">| 2024</div>
                                    </div>
                                    <div class="post-entry">
                                        <p>Las exportaciones de cacao y sus derivados desde Bolivia han mantenido una tendencia constante en los últimos 10 años, tanto en valor como en volumen. Sin embargo, en 2024 se ha registrado un crecimiento destacado en las exportaciones de cacao y sus derivados, con un aumento superior al 430% en comparación con el mismo período de enero a noviembre de 2023...</p>
                                    </div>
                                    <div class="post-more"><a class="more-link" href="{{asset('/storage/boletines-productos/Boletin_Exportaciones_Cacao_Chocolate.pdf')}}" target="_blank">Ver boletín</a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="post">
                                    <div class="post-header font-alt">
                                        <h2 class="post-title"><a href="#">Exportaciones de Café</a></h2>
                                        <div class="post-meta">| 2024</div>
                                    </div>
                                    <div class="post-entry">
                                        <p>Las exportaciones de Café desde Bolivia han experimentado fluctuaciones tanto en valor como en volumen desde 2013. En términos de valor, el máximo histórico se registró en 2014, con 16,55 millones de dólares, sin embargo, desde entonces ha presentado una tendencia a disminuir, alcanzando 11,70 millones de dólares en 2023...</p>
                                    </div>
                                    <div class="post-more"><a class="more-link" href="{{asset('/storage/boletines-productos/Boletin_Exportaciones_Café.pdf')}}" target="_blank">Ver boletín</a></div>
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