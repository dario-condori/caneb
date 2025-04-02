@extends('basePortal')

@section('titulo', 'Boletin de Productos')

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
                                    <div class="post-thumbnail text-center">
                                        <a href="{{asset('/storage/boletines-productos/2024-boletin-producto-alasitas.pdf')}}" target="_blank">
                                            <img src="{{asset('/storage/boletines-productos/2024-boletin-producto-alasitas.png')}}" alt="Boletín" width="250px"/>
                                        </a>
                                    </div>
                                    <div class="post-header font-alt">
                                        <h2 class="post-title">Exportaciones de Artesanias en Cerámica y Madera</h2>
                                        <div class="post-meta">| 2024</div>
                                    </div>
                                    <div class="post-entry">
                                        <p>Las exportaciones de Artesanías en Cerámica y Madera desde Bolivia han experimentado fluctuaciones tanto en valor como en volumen desde 2013. En términos de valor, el máximo histórico se registró en 2022, con 112.279,30 dólares, sin embargo, desde entonces ha presentado una tendencia a disminuir, alcanzando 25.545,24 dólares en 2023...</p>
                                    </div>
                                    <div class="post-more">
                                        <a class="more-link" href="{{asset('/storage/boletines-productos/2024-boletin-producto-alasitas.pdf')}}" target="_blank">
                                            Ver boletín
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="post">
                                    <div class="post-thumbnail text-center">
                                        <a href="{{asset('/storage/boletines-productos/boletin-producto-2024-castana.pdf')}}" target="_blank">
                                            <img src="{{asset('/storage/boletines-productos/boletin-producto-2024-castana.png')}}" alt="Boletín" width="270px"/>
                                        </a>
                                    </div>
                                    <div class="post-header font-alt">
                                    <h2 class="post-title">Exportaciones de la Castaña</h2>
                                    <div class="post-meta">| 2024
                                    </div>
                                    </div>
                                    <div class="post-entry">
                                    <p>Las exportaciones de castaña desde Bolivia han experimentado fluctuaciones tanto en valor como en volumen desde 2013. En términos de valor, el máximo histórico se registró en 2018, con 221,19 millones de dólares, sin embargo, desde entonces ha presentado una tendencia a disminuir, alcanzando 115,41 millones de dólares en 2023...</p>
                                    </div>
                                    <div class="post-more">
                                        <a class="more-link" href="{{asset('/storage/boletines-productos/boletin-producto-2024-castana.pdf')}}" target="_blank">
                                            Ver boletín
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row multi-columns-row post-columns">
                            <div class="col-md-6 col-lg-6">
                                <div class="post">
                                    <div class="post-thumbnail text-center">
                                        <a href="{{asset('/storage/boletines-productos/boletin-producto-2024-cacao.pdf')}}" target="_blank">
                                            <img src="{{asset('/storage/boletines-productos/boletin-producto-2024-cacao.png')}}" alt="Boletín" width="250px"/>
                                        </a>
                                    </div>
                                    <div class="post-header font-alt">
                                        <h2 class="post-title">Exportaciones de Cacao y sus derivados 2025</h2>
                                        <div class="post-meta">| 2025</div>
                                    </div>
                                    <div class="post-entry">
                                        <p>Las exportaciones de cacao y sus derivados desde Bolivia han mantenido una tendencia constante en los últimos 10 años, tanto en valor como en volumen. Sin embargo, en 2024 se ha registrado un crecimiento destacado en las exportaciones de cacao y sus derivados, con un aumento superior al 430% en comparación con el mismo período de enero a noviembre de 2023...</p>
                                    </div>
                                    <div class="post-more">
                                        <a class="more-link" href="{{asset('/storage/boletines-productos/boletin-producto-2024-cacao.pdf')}}" target="_blank">
                                            Ver boletín
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="post">
                                    <div class="post-thumbnail text-center">
                                        <a href="{{asset('/storage/boletines-productos/boletin-producto-2024-cafe.pdf')}}" target="_blank">
                                            <img src="{{asset('/storage/boletines-productos/boletin-producto-2024-cafe.png')}}" alt="Boletín" width="250px"/>
                                        </a>
                                    </div>
                                    <div class="post-header font-alt">
                                        <h2 class="post-title">Exportaciones de Café 2024</h2>
                                        <div class="post-meta">| 2024</div>
                                    </div>
                                    <div class="post-entry">
                                        <p>Las exportaciones de Café desde Bolivia han experimentado fluctuaciones tanto en valor como en volumen desde 2013. En términos de valor, el máximo histórico se registró en 2014, con 16,55 millones de dólares, sin embargo, desde entonces ha presentado una tendencia a disminuir, alcanzando 11,70 millones de dólares en 2023...</p>
                                    </div>
                                    <div class="post-more">
                                        <a class="more-link" href="{{asset('/storage/boletines-productos/boletin-producto-2024-cafe.pdf')}}" target="_blank">
                                            Ver boletín
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row multi-columns-row post-columns">
                            <div class="col-md-6 col-lg-6">
                                <div class="post">
                                    <div class="post-thumbnail text-center">
                                        <a href="{{asset('/storage/boletines-bilaterales/Comercio_Bilateral_Bolivia_China.pdf')}}" target="_blank">
                                            <img src="{{asset('/storage/boletines-bilaterales/Comercio_Bilateral_Bolivia_China.png')}}" alt="Boletín" width="250px"/>
                                        </a>
                                    </div>
                                    <div class="post-header font-alt">
                                        <h2 class="post-title">Comercio Bilateral Bolivia-China 2024</h2>
                                        <div class="post-meta">| 2024</div>
                                    </div>
                                    <div class="post-entry">
                                        <p>La balanza comercial entre Bolivia y China ha mostrado un déficit constante debido a los altos niveles de importación. Sin embargo, en los últimos años se ha observado una tendencia al alza en las exportaciones. Al comparar los datos de enero a agosto, se nota un incremento en las exportaciones...</p>
                                    </div>
                                    <div class="post-more">
                                        <a class="more-link" href="{{asset('/storage/boletines-bilaterales/Comercio_Bilateral_Bolivia_China.pdf')}}" target="_blank">
                                            Ver boletín
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="post">
                                    <div class="post-thumbnail text-center">
                                        <a href="{{asset('/storage/boletines-bilaterales/Comercio_Bilateral_Bolivia_USA.pdf')}}" target="_blank">
                                            <img src="{{asset('/storage/boletines-bilaterales/Comercio_Bilateral_Bolivia_USA.png')}}" alt="Boletín" width="250px"/>
                                        </a>
                                    </div>
                                    <div class="post-header font-alt">
                                        <h2 class="post-title">Comercio Bilateral Bolivia-Paraguay 2024</h2>
                                        <div class="post-meta">| 2024</div>
                                    </div>
                                    <div class="post-entry">
                                        <p>El comercio bilateral entre Bolivia y Estados Unidos muestra una disminución en las exportaciones en los últimos años. Desde 2014, las exportaciones de Bolivia a Estados Unidos han disminuido de 2.010,89 millones de dólares en 2014 a 224,23 millones de dólares en 2023....</p>
                                    </div>
                                    <div class="post-more">
                                        <a class="more-link" href="{{asset('/storage/boletines-bilaterales/Comercio_Bilateral_Bolivia_USA.pdf')}}" target="_blank">
                                            Ver boletín
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="pagination font-alt">
                            <a href="#"><i class="fa fa-angle-left"></i></a>
                            <a class="active" href="#">1</a>
                            <a href="#">2</a><a href="#">3</a>
                            <a href="#">4</a><a href="#"><i class="fa fa-angle-right"></i></a>
                        </div> --}}
                    </div>
                    <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
                        {{-- <div class="widget">
                            <form role="form">
                            <div class="search-box">
                                <input class="form-control" type="text" placeholder="Search..."/>
                                <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                            </form>
                        </div> --}}
                        <div class="widget">
                            <h5 class="widget-title font-alt">Categorias</h5>
                            <ul class="icon-list">
                            <li><a href="#">Todos</a></li>
                            {{-- <li><a href="#">Web Design - 3</a></li>
                            <li><a href="#">Illustration - 12</a></li>
                            <li><a href="#">Marketing - 1</a></li>
                            <li><a href="#">Wordpress - 16</a></li> --}}
                            </ul>
                        </div>
                        {{-- <div class="widget">
                            <h5 class="widget-title font-alt">Popular Posts</h5>
                            <ul class="widget-posts">
                            <li class="clearfix">
                                <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-3.jpg" alt="Post Thumbnail"/></a></div>
                                <div class="widget-posts-body">
                                <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                                <div class="widget-posts-meta">23 january</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-4.jpg" alt="Post Thumbnail"/></a></div>
                                <div class="widget-posts-body">
                                <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                                <div class="widget-posts-meta">15 February</div>
                                </div>
                            </li>
                            </ul>
                        </div> --}}
                        <div class="widget">
                            <h5 class="widget-title font-alt">Etiquetas</h5>
                            <div class="tags font-serif">
                                <a href="#" rel="tag">Comercio</a>
                                <a href="#" rel="tag">Productos</a>
                                {{-- <a href="#" rel="tag">Video</a>
                                <a href="#" rel="tag">Image</a>
                                <a href="#" rel="tag">Minimal</a>
                                <a href="#" rel="tag">Post</a>
                                <a href="#" rel="tag">Theme</a>
                                <a href="#" rel="tag">Ideas</a>
                                <a href="#" rel="tag">Tags</a>
                                <a href="#" rel="tag">Bootstrap</a>
                                <a href="#" rel="tag">Popular</a>
                                <a href="#" rel="tag">English</a> --}}
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title font-alt">Introducción</h5>
                            En esta sección se publica los boletines de los productos que exporta Bolivia.
                        </div>
                        {{-- <div class="widget">
                            <h5 class="widget-title font-alt">Recent Comments</h5>
                            <ul class="icon-list">
                            <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                            <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                            <li>Andy on <a href="#">Eco bag Mockup</a></li>
                            <li>Jack on <a href="#">Bottle Mockup</a></li>
                            <li>Mark on <a href="#">Our trip to the Alps</a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
        @include('portal.contacto')
        @include('portal.pie')
    </div>
@endsection