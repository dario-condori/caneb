<script type="text/javascript">
    $(document).ready(function() {
        let fil = <?php echo json_encode($filtros); ?>;
        load_graphHcExportAreaEconomica("{{ $id_div }}", {{ $xprod }}, {{ $gestion_ini }}, {{ $gestion_fin }}, {{ $ames }}, fil);
    });
	
    function load_graphHcExportAreaEconomica(iddiv, xprod, gestion_ini, gestion_fin, ames, filtros){
        $("#"+iddiv).html("<img src='{{ asset('portal/images/caneb/cargando_caneb.gif') }}' width='150' height='150'>");
        var options = {
            chart: {
                renderTo: iddiv,
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                borderColor: '#d7e2ea',
                borderWidth: 0.5,
                type: 'packedbubble'
            },
            credits: {
                text: 'Elaborado: CANEB en base a fuente INE',
                href: 'http://http://caneb.org/'
            },
            title: {
                text: '',
                style: {
                    color: '#000000',
                    font: 'bold 14px "Lucida Sans Unicode", "Lucida Grande", sans-serif'
                }
            },
            subtitle: {
                text: '(En porcentajes)'
            },
            tooltip: {
                useHTML: true,
				valueDecimals: 2,
				pointFormat: '<b>{point.name}:</b> {point.value} MM$us'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            legend: {
                enabled: false
            },
            legend: {
                enabled: true
            },
            plotOptions: {
                packedbubble: {
                    minSize: '20%',
                    maxSize: '250%',
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
                            value: 0
                        },
                        style: {
                            color: 'black',
                            textOutline: 'none',
                            fontWeight: 'normal'
                        }
                    }
                }/*,
                series: {
                    point: {
                        events: {
                            click: function () {
                                //listarProductosDelPais(this.name);
                            }
                        }
                    }
                }*/
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
                    name: "Korea",
                    value: 610.1
                }]
            }]
        };
        $.ajax({
            url: "{{ route('graph.exportSector') }}",
            data: 'x='+xprod+'&gi='+gestion_ini+'&gf='+gestion_fin+'&am='+ames+'&filtros='+JSON.stringify(filtros),
            type:'get',
            dataType: "json",
            success: function(data){
                mesAcumulado=data.mes;
                options.subtitle.text = '(En porcentaje)';
                options.title.text = data.titulo;
                options.series[0].data = data.datos;
                var chart = new Highcharts.Chart(options);
            }
        });
    }
</script>