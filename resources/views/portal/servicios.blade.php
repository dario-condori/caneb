@extends('basePortal')

@section('titulo', 'Servicios')

@section('contenido')
    <div class="main">
        <section class="module bg-dark" style="margin-top: 90px;height: 200px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h2 class="module-title font-alt">SERVICIOS</h2>
                    </div>
                </div>
            </div>
            <div id="exportaciones"></div>
        </section>
        
        <section class="module" >
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">EXPORTACIONES</h2>
                        <div class="module-subtitle font-serif">Brindamos servicios integrales para el desarrollo de las exportaciones y la internacionalización de los negocios.</div>
                    </div>
                </div>
                <div class="row multi-columns-row post-columns">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="post mb-20">
                            <div class="post-header font-alt">
                                <h2 class="post-title">Gestión de Exportaciones</h2>
                            </div>
                            <div class="post-entry">
                                <p>La CANEB y las Cámaras Departamentales de Exportadores velan por los intereses del sector exportador realizando gestiones como ser:</p>
                            </div>
                            <div class="post-more">Representación</div>
                            <ul>
                                <li>Nacional.</li>
                                <li>Internacional.</li>
                            </ul>
                            <div class="post-more">Gestión e implementación</div>
                            <ul>
                                <li>Política públicas.</li>
                                <li>Acuerdos internacionales.</li>
                                <li>Legislación.</li>
                            </ul>
                            <div class="post-more">Cooperación con organismos</div>
                            <ul>
                                <li>Nacionales / Departamentales / Locales.</li>
                                <li>Internacionales.</li>
                            </ul>
                            <div class="post-thumbnail">
                                <img src="{{ asset('portal/images/caneb/export1.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="post mb-20">
                            <div class="post-header font-alt">
                                <h2 class="post-title">Plataformas Sectoriales</h2>
                            </div>
                            <div class="post-entry">
                                <p>Con el objetivo de apoyar los sectores con potencial exportador, la CANEB, a través de su red de Cámaras Departamentales de Exportadores a nivel nacional, impulsa plataformas de apoyo sectorial. El objetivo de las mismas es aunar esfuerzos con el apoyo de las diferentes entidades e instituciones que prestan servicios o que cooperan con el fortalecimiento y competitividad sectorial, para lograr su internacionalización o la diversificación de sus mercados, incluyendo el fortalecimiento de las cadenas de valor.</p>
                            </div>
                            <div class="post-thumbnail">
                                <img src="{{ asset('portal/images/caneb/export2.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="logistica"></div>
        </section>
        <section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">LOGÍSTICA</h2>
                        <div class="module-subtitle font-serif">Trabajamos para mejorar la estructura y funcionamiento del sistema logístico comercial nacional.</div>
                    </div>
                </div>
                <div class="row multi-columns-row post-columns">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="post mb-20">
                            <div class="post-header font-alt">
                                <h2 class="post-title">Promoción Comercial</h2>
                            </div>
                            <div class="post-entry">
                                <p>Apoyo y asistencia a las empresas con el objetivo de lograr una vitrina de la oferta exportable boliviana, diversificando mercados e incentivando la participación de empresarios en actividades nacionales e internacionales.</p>
                            </div>
                            <ul>
                                <li>Ferias nacionales e internacionales.</li>
                                <li>Ruedas de negocio.</li>
                                <li>Misiones comerciales.</li>
                                <li>Red de contactos.</li>
                                <li>Showrooms.</li>
                            </ul>
                            <div class="post-thumbnail">
                                <img src="{{ asset('portal/images/caneb/logistica1.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="post mb-20">
                            <div class="post-header font-alt">
                                <h2 class="post-title">Logística</h2>
                            </div>
                            <div class="post-entry">
                                <p>Facilita la movilización de las exportaciones desde Bolivia hacia el mundo, generando información especializada en:</p>
                            </div>
                            <ul>
                                <li>Asesoramiento en Logística/Transporte.</li>
                                <li>Asesoramiento INCOTERMS.</li>
                                <li>Consultoría en costos de Exportación.</li>
                                <li>Fletes Referenciales de Transporte.</li>
                                <li>Información sobre Prestatarios de Servicios.</li>
                                <li>Consultorías en Supply Chain Managment.</li>
                            </ul>
                            <div class="post-thumbnail">
                                <img src="{{ asset('portal/images/caneb/export2.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="inversiones"></div>
        </section>
        <section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">INVERSIONES</h2>
                        <div class="module-subtitle font-serif">Promovemos alianzas e inversiones para desarrollar nuevos productos y sectores que agreguen valor, generen empleo y aumenten las exportaciones.</div>
                    </div>
                </div>
                <div class="row multi-columns-row post-columns">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="post mb-20">
                            <div class="post-header font-alt">
                                <h2 class="post-title">Asociatividad</h2>
                            </div>
                            <div class="post-entry">
                                <p>Impulso y apoyo a la productividad de las PYMES que ayude a superar problemas estructurales y así mejorar su competitividad</p>
                            </div>
                            <div class="post-more">Servicio</div>
                            <ul>
                                <li>Consorcios.</li>
                                <li>Núcleos.</li>
                            </ul>
                            <div class="post-more">Gestión e implementación</div>
                            <ul>
                                <li>Política públicas.</li>
                                <li>Acuerdos internacionales.</li>
                                <li>Legislación.</li>
                            </ul>
                            <div class="post-more">Cooperación con organismos</div>
                            <ul>
                                <li>Nacionales / Departamentales / Locales.</li>
                                <li>Internacionales.</li>
                            </ul>
                            <div class="post-thumbnail">
                                <img src="{{ asset('portal/images/caneb/inversiones1.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="post mb-20">
                            <div class="post-header font-alt">
                                <h2 class="post-title">Asesoramiento Individual</h2>
                            </div>
                            <div class="post-entry">
                                <p>Trabajo personalizado de acuerdo a las necesidades de la empresa y sus productos. Asistencia efectiva de identificación de mercados potenciales para la exportación:</p>
                            </div>
                            <div class="post-more">Auditoria y Planificación</div>
                            <ul>
                                <li>Company Audit.</li>
                                <li>Planificación.</li>
                                <li>Diseño de Producto.</li>
                                <li>Etiquetado.</li>
                                <li>Empaque y Embalaje.</li>
                            </ul>
                            <div class="post-more">Inteligencia en el Mercado</div>
                            <ul>
                                <li><a href="{{ route('portal.estadisticas') }}">Estadísticas.</a></li>
                                <li>Perfiles de Mercado.</li>
                                <li>Demandas de Mercado.</li>
                                <li>Estudios de Mercado.</li>
                            </ul>
                            <div class="post-more">Inteligencia en el Mercado</div>
                            <ul>
                                <li>Certificaciones.</li>
                            </ul>
                            <div class="post-more">Responsabilidad Social Empresarial</div>
                            <ul>
                                <li>Diagnóstico.</li>
                                <li>Implementación.</li>
                                <li>Auditoría.</li>
                            </ul>
                            <div class="post-thumbnail">
                                <img src="{{ asset('portal/images/caneb/inversiones2.jpg') }}">
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