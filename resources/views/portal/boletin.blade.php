@extends('baseBoletin')

@section('titulo', 'Boletin')

@section('hojaEstilos')
    <script src="{{asset('highcharts10/highcharts.js')}}"></script>
    <script src="{{asset('highcharts10/highcharts-more.js')}}"></script>
    <script src="{{asset('highcharts10/modules/series-label.js')}}"></script>
    <script src="{{asset('highcharts10/modules/exporting.js')}}"></script>
    <script src="{{asset('highcharts10/modules/export-data.js')}}"></script>
    <script src="{{asset('highcharts10/modules/accessibility.js')}}"></script>
    <script src="{{asset('portal/css/boletin.css')}}"></script>
@endsection

@section('contenido')
    <div class="main" style="background: #ffffff;">
        <section class="module" id="news">
            <div class="container">
                <div class="boletin" style="background: #fff; box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.2);">
                    <div class="row" style="padding-left: 15px; padding-right: 15px;">
                        <img src="{{asset('portal/images/caneb/tituloBoletin.png')}}" width="100%" alt="CANEB"/>
                    </div>
                    <div class="row">
                        <div class="col-sm-12" style="text-align: center">
                            <h3><b>{{$boletin['titulo']}}</b></h3>
                        </div>
                    </div>
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
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        
                    </div>
                </div>
            </div>
        </section>
        <hr class="divider-w">
        @include('portal.pie')
    </div>
@endsection