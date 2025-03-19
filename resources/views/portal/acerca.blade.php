@extends('basePortal')

@section('titulo', 'Sobre nosotros')

@section('contenido')
    <div class="main">
        <section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h2 class="module-title font-alt"></h2>
                        <h2 class="module-title font-alt">SOBRE NOSOTROS</h2>
                        <div class="module-subtitle font-serif">Desde 1969 representando los intereses del sector exportador.</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="mivi-text justificado">
                            La Cámara Nacional de Exportadores de Bolivia (CANEB), es una entidad gremial nacional de derecho privado sin fines de lucro, fundada el 2 de agosto de 1969, asocia y representa a las cámaras departamentales de exportadores, quienes a su vez afilian cerca de 2143 empresas exportadoras del país.
                            <br/><br/>Para la CANEB, uno de sus objetivos primordiales, es apoyar al sector empresarial exportador en la búsqueda de mayor competitividad a nivel internacional y consolidar su desarrollo a través de alianzas estratégicas con empresarios que permitan dar mayor valor agregado a su actividad productiva
                            <br/><br/>La CANEB, en su afán de buscar mejores oportunidades de negocio y progreso en favor del gremio exportador boliviano, y por constituirse en la entidad conocedora de las características y necesidades del mismo, además contar con una cobertura a nivel nacional a través de sus Cámaras Departamentales,  ha venido apoyando las diferentes iniciativas empresariales (grandes, medianas y pequeñas) bajo el auspicio de la cooperación internacional a través de un trabajo conjunto en la implementación de programas y proyectos que incluyen capacitación, interrelación entre empresas bolivianas y extranjeras para formar sociedades,  potenciamiento del sector, apoyo a las empresas en todo el proceso de incorporación de su capacidad productiva en los mercados internacionales, gestión para lograr competitividad de sus productos, así como valor agregado, entre otros, de igual importancia.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">NUESTRAS AUTORIDADES</h2>
                        <h1 class="consejo font-alt">COMITE EJECUTIVO 2023 - 2025</h1>
                        <h3 class="directorio">El Directorio de CANEB está compuesto por la representación de las Cámaras Departamentales, a través de sus Presidentes</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-4" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="team-item">
                            <div class="team-image">
                                <img src="{{ asset('storage/directorio/Danilo_Velasco_Valdez.png') }}" width="150px">
                            </div>
                            <div class="team-descr font-alt">
                                <div class="team-role">Presidente CANEB</div>
                                <div class="team-name">Danilo Velasco Valdez</div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-4" onclick="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="team-item">
                            <div class="team-image">
                                <img src="{{ asset('storage/directorio/Oswaldo_Barriga_Karlbaum.png') }}" width="150px">
                            </div>
                            <div class="team-descr font-alt">
                                <div class="team-role">1er Vicepresidente CANEB</div>
                                <div class="team-name">Oswaldo Barriga Karlbaum</div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-4" onclick="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="team-item">
                            <div class="team-image">
                                <img src="{{ asset('storage/directorio/Juan_Carlos_Avila_Solis.png') }}" width="150px">
                            </div>
                            <div class="team-descr font-alt">
                                <div class="team-role">2do Vicepresidente y Tesorero CANEB</div>
                                <div class="team-name">Juan Carlos Avila Solis</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="module" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">CAMARAS DEPARTAMENTALES</h2>
                        <div class="directorio">El Directorio esta conformado por las Cámaras Departamentales en todo el país.</div>
                    </div>
                </div>
                <div class="row multi-columns-row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon">
                                <img src="{{ asset('portal/images/caneb/camaras/3_ CADEX.png') }}" width="150px">
                            </div>
                            <h3 class="features-title font-alt">Santa Cruz</h3>
                            <p>CADEX – Cámara de Esportadores, Logística y Promoción de Inversiones de Santa Cruz.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon">
                                <span><img src="{{ asset('portal/images/caneb/camaras/9_CAMEX.png') }}" width="150px"></span>
                            </div>
                            <h3 class="features-title font-alt">La Paz</h3>
                            <p>CAMEX – Cámara de Exportadores, Logística y Promoción de Inversiones de La Paz.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon">
                                <span><img src="{{ asset('portal/images/caneb/camaras/2_CADEXCO.png') }}" width="150px"></span>
                            </div>
                            <h3 class="features-title font-alt">Cochabamba</h3>
                            <p>CADEXCO – Cámara de Exportadores de Cochabamba.</p>
                        </div>
                    </div>
                </div>
                <div class="row multi-columns-row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon">
                                <span><img src="{{ asset('portal/images/caneb/camaras/5_CADEXOR.png') }}" width="150px"></span>
                            </div>
                            <h3 class="features-title font-alt">Oruro</h3>
                            <p>CADEXOR – Cámara de Exportadores de Oruro.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon">
                                <span><img src="{{ asset('portal/images/caneb/camaras/7_CADEX_POTOSI.png') }}" width="80px"></span>
                            </div>
                            <h3 class="features-title font-alt">Potosí</h3>
                            <p>CADEX POTOSI – Cámara de Exportadores de Potosí.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon">
                                <span><img src="{{ asset('portal/images/caneb/camaras/1_CADEX_CH.png') }}" width="200px"></span>
                            </div>
                            <h3 class="features-title font-alt">Chuquisaca</h3>
                            <p>CADEX-CH – Cámara de Exportadores de Chuquisaca.</p>
                        </div>
                    </div>
                </div>
                <div class="row multi-columns-row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon">
                                <span><img src="{{ asset('portal/images/caneb/camaras/4_CADEXNOR.png') }}" width="80px"></span>
                            </div>
                            <h3 class="features-title font-alt">Beni</h3>
                            <p>CADEXNOR – Cámara de Empresarial, de Exportación, Logística, Servicios, Desarrollo, Educación, Ciencia y Tecnología del Norte.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon">
                                <img src="{{ asset('portal/images/caneb/camaras/6_CADEXPANDO.png') }}" width="140px">
                            </div>
                            <h3 class="features-title font-alt">Pando</h3>
                            <p>CADEXPANDO – Cámara de Exportadores de Pando.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon">
                                <img src="{{ asset('portal/images/caneb/camaras/8_CADEXST.png') }}" width="190px">
                            </div>
                            <h3 class="features-title font-alt">Tarija</h3>
                            <p>CADEX-ST – Cámara de Exportadores del Sur de Tarija.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="module bg-dark-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Números que hablan por nosotros</h2>
                        <div class="module-subtitle font-serif"></div>
                    </div>
                </div>
                <div class="row multi-columns-row">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="count-item mb-sm-40">
                            <div class="count-icon"><span class="icon-linegraph"></span></div>
                            <h3 class="count-to font-alt" data-countto="56">56</h3>
                            <h5 class="count-title font-serif">Años de experiencia</h5>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="count-item mb-sm-40">
                            <div class="count-icon"><span class="icon-map"></span></div>
                            <h3 class="count-to font-alt" data-countto="9">9</h3>
                            <h5 class="count-title font-serif">Cámaras Departamentales</h5>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="count-item mb-sm-40">
                            <div class="count-icon"><span class="icon-profile-male"></span></div>
                            <h3 class="count-to font-alt" data-countto="2143">2.143</h3>
                            <h5 class="count-title font-serif">Exportadores Registrados</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('portal.contacto')
        @include('portal.pie')
    </div>
@endsection