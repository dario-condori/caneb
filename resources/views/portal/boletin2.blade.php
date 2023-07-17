<!DOCTYPE html>
<html class="no-js" lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Tansh" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

		<title>Boletín II</title>
		<meta name="title" content="Caneb">
		<meta name="dc.title" content="Cámara Nacional de Exportadores de Bolivia">
		<meta name="description" content="Contamos con Servicio de información estadistica del comercio exterior de Bolivia!">
		<meta http-equiv="dc.description" content="Contamos con Servicio de información estadistica del comercio exterior de Bolivia!">
		<meta property="og:description" content="Contamos con Servicio de información estadistica del comercio exterior de Bolivia!">
		
		<script src="{{asset('highcharts10/highcharts.js')}}"></script>
    <script src="{{asset('highcharts10/highcharts-more.js')}}"></script>
    <script src="{{asset('highcharts10/modules/series-label.js')}}"></script>
    <script src="{{asset('highcharts10/modules/exporting.js')}}"></script>
    <script src="{{asset('highcharts10/modules/export-data.js')}}"></script>
    <script src="{{asset('highcharts10/modules/accessibility.js')}}"></script>

		<link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="{{asset('portal/boletin/bootstrap.css')}}"/>
		<link rel="stylesheet" href="{{asset('portal/boletin/fontawesome-all.css')}}"/>
		<link rel="stylesheet" href="{{asset('portal/boletin/styleBoletin.css')}}"/>

		<script src="{{asset('portal/boletin/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
	</head>
	<body>
		<section>
			<div class="container">
				<div class="col-md-12 hoja">
					<div class="row">
						<div class="col-md-12">
							<div class="imagenTitulo" style="background-image: url({{asset('portal/boletin/tituloBoletin.png')}}), linear-gradient(#00020a, #00020a); ">
								<div class="cabeceraTitulo">
									<h1> Boletin digital CANEB</h1>
								</div>
							</div>
							<h1 class="titulo">{{$boletin['titulo']}}</h1>
							<p class="descTitulo">
								<span class="letraCapital">IDA</span>, nuestra plataforma para comunicaciones digitales, autogestionada por uno mismo, amigable y fácil de utilizar,  que nos brinda Amazon.<br><br>
								<span class="letraCapital">ITD</span> también brinda otras soluciones en informática, para integrar sus procesos de negocio con nuestra plataforma 
								<span class="letraCapital">IDA</span>, ya sea manualmente o automáticamente, impactando en la mejora de sus procesos y en la productividad de sus as que genereas a 
								<span class="letraCapital">IDA</span>.
							</p>
						</div>
						<div class="container">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-12 ">
                                        @foreach($boletin['contenido'] as $secc)
                                            <div class="row">
                                                @foreach($secc as $dat)
                                                    <div class="col-sm-12 col-md-{{$dat['ancho']}} col-lg-{{$dat['ancho']}}">
                                                        <div class="post mb-20">
                                                            <div class="post-entry">
                                                                <div class="chart">
                                                                    <figure class="highcharts-figure">
                                                                        <div id="graph_{{$dat['id']}}">
                                                                            @includeIf($dat['vista'], ['id_div'=>'graph_'.$dat['id'], 'xprod'=>$dat['cantidad_item'], 'gestion_ini'=>$dat['gestion_ini'], 'gestion_fin'=>$dat['gestion_fin'], 'ames'=>0, 'filtros'=>$dat['filtros']])
                                                                        </div>
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
										<div class="col-md-6 " style="float:left;">
											<h1 class="titulo2">Servicio de Mailings Masivo</h1>
											<p class="textoserv" style="text-align: justify; padding: 10px 25px 0px 25px;">Cargue su base de datos, cree o importe el mailing, programe el envío y gestione los resultados de la campaña. Adjunte archivos con seguridad, generados por ustedes o por nosotros, almacénelos y consúltelos cuando lo requiera y desde cualquier ubicación. Obtenga reportes en línea: cuántos mails llegaron, rebotaron, leídos, eliminados, marcados como spam, etc.
											<br><br>
											Todo esto, utilizando nuestra plataforma IDA, ya sea vía Web o API de integración.
											<br><br>
										</div>
										<div class="col-md-6 cuadro" style="float:right;">
											<div class="row">
												<div class="col-md-6 imagenes" style="text-align: center; padding: 15px;">
													<img class="imgserv" src="recursos/camex.png" width="100px"><br><br>
													<h4 class="descImagenes">Entrega de reportes en tiempo real y seguimiento a los mails enviados.</h4>
												</div>
												<div class="col-md-6 imagenes" style="text-align: center; padding: 15px;">
													<img class="imgserv" src="recursos/camex.png" width="100px"><br><br>
													<h4 class="descImagenes">Análisis de resultados de envíos masivos.<br><br></h4>
												</div>
												<div class="col-md-6 imagenes" style="text-align: center; padding: 15px;">
													<img class="imgserv" src="recursos/camex.png" width="100px"><br><br>
													<h4 class="descImagenes">Acceso 24/7.</h4>
												</div>
												<div class="col-md-6 imagenes" style="text-align: center; padding: 15px;">
													<img class="imgserv" src="recursos/cadexco.png" width="100px"><br><br>
													<h4 class="descImagenes">Programar envios.</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
 
		<script src="{{asset('portal/boletin/bootstrap.js')}}" type="text/javascript" ></script>
	</body>

</html>