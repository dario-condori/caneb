@extends('basePortal')

@section('titulo', 'Estadísticas')

@section('hojaEstilos')
    <script src="{{asset('highcharts10/highcharts.js')}}"></script>
    <script src="{{asset('highcharts10/highcharts-more.js')}}"></script>
    <script src="{{asset('highcharts10/modules/series-label.js')}}"></script>
    <script src="{{asset('highcharts10/modules/exporting.js')}}"></script>
    <script src="{{asset('highcharts10/modules/export-data.js')}}"></script>
    <script src="{{asset('highcharts10/modules/accessibility.js')}}"></script>
@endsection

@section('contenido')
    <div class="main">
        <section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h2 class="module-title font-alt">ESTADISTICAS</h2>
                    </div>
                </div>
                @foreach($contenido as $secc)
                    <div class="row mt-5">
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
        </section>
        @include('portal.pie')
    </div>
@endsection

@section('javascripts')
    <script type="text/javascript">
        Highcharts.setOptions({
            colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
                return {
                    radialGradient: {
                        cx: 0.5,
                        cy: 0.3,
                        r: 0.7
                    },
                    stops: [
                        [0, color],
                        [1, Highcharts.color(color).brighten(-0.3).get('rgb')] // darken
                    ]
                };
            }),
            lang: {
                thousandsSep: ','
            }
        });
    </script>
    
    
    <script type="text/javascript">
        /*Highcharts.chart('container3', {
            chart: {
                type: 'packedbubble',
                borderColor: '#d7e2ea',
                borderWidth: 0.5,
                height: '100%'
            },
            title: {
                text: 'Exportaciones segun pais destino (2022)'
            },
            credits: {
                text: 'Elaborado: CANEB en base a fuente INE',
                href: 'http://http://caneb.org/'
            },
            tooltip: {
                useHTML: true,
                pointFormat: '<b>{point.name}:</b> {point.value}m CO<sub>2</sub>'
            },
            plotOptions: {
                packedbubble: {
                    minSize: '30%',
                    maxSize: '120%',
                    zMin: 0,
                    zMax: 1000,
                    layoutAlgorithm: {
                        splitSeries: false,
                        gravitationalConstant: 0.02
                    },
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}',
                        filter: {
                            property: 'y',
                            operator: '>',
                            value: 250
                        },
                        style: {
                            color: 'black',
                            textOutline: 'none',
                            fontWeight: 'normal'
                        }
                    }
                }
            },
            series: [{
                name: 'Europe',
                data: [{
                    name: 'Germany',
                    value: 767.1
                }, {
                    name: 'Croatia',
                    value: 20.7
                },
                {
                    name: "Belgium",
                    value: 97.2
                },
                {
                    name: "Czech Republic",
                    value: 111.7
                },
                {
                    name: "Netherlands",
                    value: 158.1
                },
                {
                    name: "Spain",
                    value: 241.6
                },
                {
                    name: "Ukraine",
                    value: 249.1
                },
                {
                    name: "Poland",
                    value: 298.1
                },
                {
                    name: "France",
                    value: 323.7
                },
                {
                    name: "Romania",
                    value: 78.3
                },
                {
                    name: "United Kingdom",
                    value: 415.4
                }, {
                    name: "Turkey",
                    value: 353.2
                }, {
                    name: "Italy",
                    value: 337.6
                },
                {
                    name: "Greece",
                    value: 71.1
                },
                {
                    name: "Austria",
                    value: 69.8
                },
                {
                    name: "Belarus",
                    value: 67.7
                },
                {
                    name: "Serbia",
                    value: 59.3
                },
                {
                    name: "Finland",
                    value: 54.8
                },
                {
                    name: "Bulgaria",
                    value: 51.2
                },
                {
                    name: "Portugal",
                    value: 48.3
                },
                {
                    name: "Norway",
                    value: 44.4
                },
                {
                    name: "Sweden",
                    value: 44.3
                },
                {
                    name: "Hungary",
                    value: 43.7
                },
                {
                    name: "Switzerland",
                    value: 40.2
                },
                {
                    name: "Denmark",
                    value: 40
                },
                {
                    name: "Slovakia",
                    value: 34.7
                },
                {
                    name: "Ireland",
                    value: 34.6
                },
                {
                    name: "Croatia",
                    value: 20.7
                },
                {
                    name: "Estonia",
                    value: 19.4
                },
                {
                    name: "Slovenia",
                    value: 16.7
                },
                {
                    name: "Lithuania",
                    value: 12.3
                },
                {
                    name: "Luxembourg",
                    value: 10.4
                },
                {
                    name: "Macedonia",
                    value: 9.5
                },
                {
                    name: "Moldova",
                    value: 7.8
                },
                {
                    name: "Latvia",
                    value: 7.5
                },
                {
                    name: "Cyprus",
                    value: 7.2
                }]
            }, {
                name: 'Africa',
                data: [{
                    name: "Senegal",
                    value: 8.2
                },
                {
                    name: "Cameroon",
                    value: 9.2
                },
                {
                    name: "Zimbabwe",
                    value: 13.1
                },
                {
                    name: "Ghana",
                    value: 14.1
                },
                {
                    name: "Kenya",
                    value: 14.1
                },
                {
                    name: "Sudan",
                    value: 17.3
                },
                {
                    name: "Tunisia",
                    value: 24.3
                },
                {
                    name: "Angola",
                    value: 25
                },
                {
                    name: "Libya",
                    value: 50.6
                },
                {
                    name: "Ivory Coast",
                    value: 7.3
                },
                {
                    name: "Morocco",
                    value: 60.7
                },
                {
                    name: "Ethiopia",
                    value: 8.9
                },
                {
                    name: "United Republic of Tanzania",
                    value: 9.1
                },
                {
                    name: "Nigeria",
                    value: 93.9
                },
                {
                    name: "South Africa",
                    value: 392.7
                }, {
                    name: "Egypt",
                    value: 225.1
                }, {
                    name: "Algeria",
                    value: 141.5
                }]
            }, {
                name: 'Oceania',
                data: [{
                    name: "Australia",
                    value: 409.4
                },
                {
                    name: "New Zealand",
                    value: 34.1
                },
                {
                    name: "Papua New Guinea",
                    value: 7.1
                }]
            }, {
                name: 'North America',
                data: [{
                    name: "Costa Rica",
                    value: 7.6
                },
                {
                    name: "Honduras",
                    value: 8.4
                },
                {
                    name: "Jamaica",
                    value: 8.3
                },
                {
                    name: "Panama",
                    value: 10.2
                },
                {
                    name: "Guatemala",
                    value: 12
                },
                {
                    name: "Dominican Republic",
                    value: 23.4
                },
                {
                    name: "Cuba",
                    value: 30.2
                },
                {
                    name: "USA",
                    value: 5334.5
                }, {
                    name: "Canada",
                    value: 566
                }, {
                    name: "Mexico",
                    value: 456.3
                }]
            }, {
                name: 'South America',
                data: [{
                    name: "El Salvador",
                    value: 7.2
                },
                {
                    name: "Uruguay",
                    value: 8.1
                },
                {
                    name: "Bolivia",
                    value: 17.8
                },
                {
                    name: "Trinidad and Tobago",
                    value: 34
                },
                {
                    name: "Ecuador",
                    value: 43
                },
                {
                    name: "Chile",
                    value: 78.6
                },
                {
                    name: "Peru",
                    value: 52
                },
                {
                    name: "Colombia",
                    value: 74.1
                },
                {
                    name: "Brazil",
                    value: 501.1
                }, {
                    name: "Argentina",
                    value: 199
                },
                {
                    name: "Venezuela",
                    value: 195.2
                }]
            }, {
                name: 'Asia',
                data: [{
                    name: "Nepal",
                    value: 6.5
                },
                {
                    name: "Georgia",
                    value: 6.5
                },
                {
                    name: "Brunei Darussalam",
                    value: 7.4
                },
                {
                    name: "Kyrgyzstan",
                    value: 7.4
                },
                {
                    name: "Afghanistan",
                    value: 7.9
                },
                {
                    name: "Myanmar",
                    value: 9.1
                },
                {
                    name: "Mongolia",
                    value: 14.7
                },
                {
                    name: "Sri Lanka",
                    value: 16.6
                },
                {
                    name: "Bahrain",
                    value: 20.5
                },
                {
                    name: "Yemen",
                    value: 22.6
                },
                {
                    name: "Jordan",
                    value: 22.3
                },
                {
                    name: "Lebanon",
                    value: 21.1
                },
                {
                    name: "Azerbaijan",
                    value: 31.7
                },
                {
                    name: "Singapore",
                    value: 47.8
                },
                {
                    name: "Hong Kong",
                    value: 49.9
                },
                {
                    name: "Syria",
                    value: 52.7
                },
                {
                    name: "DPR Korea",
                    value: 59.9
                },
                {
                    name: "Israel",
                    value: 64.8
                },
                {
                    name: "Turkmenistan",
                    value: 70.6
                },
                {
                    name: "Oman",
                    value: 74.3
                },
                {
                    name: "Qatar",
                    value: 88.8
                },
                {
                    name: "Philippines",
                    value: 96.9
                },
                {
                    name: "Kuwait",
                    value: 98.6
                },
                {
                    name: "Uzbekistan",
                    value: 122.6
                },
                {
                    name: "Iraq",
                    value: 139.9
                },
                {
                    name: "Pakistan",
                    value: 158.1
                },
                {
                    name: "Vietnam",
                    value: 190.2
                },
                {
                    name: "United Arab Emirates",
                    value: 201.1
                },
                {
                    name: "Malaysia",
                    value: 227.5
                },
                {
                    name: "Kazakhstan",
                    value: 236.2
                },
                {
                    name: "Thailand",
                    value: 272
                },
                {
                    name: "Taiwan",
                    value: 276.7
                },
                {
                    name: "Indonesia",
                    value: 453
                },
                {
                    name: "Saudi Arabia",
                    value: 494.8
                },
                {
                    name: "Japan",
                    value: 1278.9
                },
                {
                    name: "China",
                    value: 10540.8
                },
                {
                    name: "India",
                    value: 2341.9
                },
                {
                    name: "Russia",
                    value: 1766.4
                },
                {
                    name: "Iran",
                    value: 618.2
                },
                {
                    name: "Korea",
                    value: 610.1
                }]
            }]
        });*/
    </script>
    <script type="text/javascript">
        /*Highcharts.chart('container4', {
            chart: {
                type: 'bubble',
                plotBorderWidth: 1,
                zoomType: 'xy',
                borderColor: '#d7e2ea',
                borderWidth: 0.5,
                height: '100%'
            },
            legend: {
                enabled: false
            },
            title: {
                text: 'Sugar and fat intake per country'
            },
            subtitle: {
                text: 'Source: <a href="http://www.euromonitor.com/">Euromonitor</a> and <a href="https://data.oecd.org/">OECD</a>'
            },
            credits: {
                text: 'Elaborado: CANEB en base a fuente INE',
                href: 'http://http://caneb.org/'
            },
            accessibility: {
                point: {
                    valueDescriptionFormat: '{index}. {point.name}, fat: {point.x}g, sugar: {point.y}g, obesity: {point.z}%.'
                }
            },
            xAxis: {
                gridLineWidth: 1,
                title: {
                    text: 'Daily fat intake'
                },
                labels: {
                    format: '{value} gr'
                },
                plotLines: [{
                    color: 'black',
                    dashStyle: 'dot',
                    width: 2,
                    value: 65,
                    label: {
                        rotation: 0,
                        y: 15,
                        style: {
                            fontStyle: 'italic'
                        },
                        text: 'Safe fat intake 65g/day'
                    },
                    zIndex: 3
                }],
                accessibility: {
                    rangeDescription: 'Range: 60 to 100 grams.'
                }
            },
            yAxis: {
                startOnTick: false,
                endOnTick: false,
                title: {
                    text: 'Daily sugar intake'
                },
                labels: {
                    format: '{value} gr'
                },
                maxPadding: 0.2,
                plotLines: [{
                    color: 'black',
                    dashStyle: 'dot',
                    width: 2,
                    value: 50,
                    label: {
                        align: 'right',
                        style: {
                            fontStyle: 'italic'
                        },
                        text: 'Safe sugar intake 50g/day',
                        x: -10
                    },
                    zIndex: 3
                }],
                accessibility: {
                    rangeDescription: 'Range: 0 to 160 grams.'
                }
            },
            tooltip: {
                useHTML: true,
                headerFormat: '<table>',
                pointFormat: '<tr><th colspan="2"><h3>{point.country}</h3></th></tr>' +
                    '<tr><th>Fat intake:</th><td>{point.x}g</td></tr>' +
                    '<tr><th>Sugar intake:</th><td>{point.y}g</td></tr>' +
                    '<tr><th>Obesity (adults):</th><td>{point.z}%</td></tr>',
                footerFormat: '</table>',
                followPointer: true
            },
            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}'
                    }
                }
            },
            series: [{
                data: [
                    { x: 95, y: 95, z: 13.8, name: 'BE', country: 'Belgium' },
                    { x: 86.5, y: 102.9, z: 14.7, name: 'DE', country: 'Germany' },
                    { x: 80.8, y: 91.5, z: 15.8, name: 'FI', country: 'Finland' },
                    { x: 80.4, y: 102.5, z: 12, name: 'NL', country: 'Netherlands' },
                    { x: 80.3, y: 86.1, z: 11.8, name: 'SE', country: 'Sweden' },
                    { x: 78.4, y: 70.1, z: 16.6, name: 'ES', country: 'Spain' },
                    { x: 74.2, y: 68.5, z: 14.5, name: 'FR', country: 'France' },
                    { x: 73.5, y: 83.1, z: 10, name: 'NO', country: 'Norway' },
                    { x: 71, y: 93.2, z: 24.7, name: 'UK', country: 'United Kingdom' },
                    { x: 69.2, y: 57.6, z: 10.4, name: 'IT', country: 'Italy' },
                    { x: 68.6, y: 20, z: 16, name: 'RU', country: 'Russia' },
                    { x: 65.5, y: 126.4, z: 35.3, name: 'US', country: 'United States' },
                    { x: 65.4, y: 50.8, z: 28.5, name: 'HU', country: 'Hungary' },
                    { x: 63.4, y: 51.8, z: 15.4, name: 'PT', country: 'Portugal' },
                    { x: 64, y: 82.9, z: 31.3, name: 'NZ', country: 'New Zealand' }
                ]
            }]

        });*/
    </script>
@endsection
