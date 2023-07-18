<script type="text/javascript">
    $(document).ready(function() {
        let fil = <?php echo json_encode($filtros); ?>;
        load_graphHcExportComparativo("{{ $id_div }}", {{ $xprod }}, {{ $gestion_ini }}, {{ $gestion_fin }}, {{ $ames }}, fil);
    });
	
    function load_graphHcExportComparativo(iddiv, xprod, gestion_ini, gestion_fin, ames, filtros){
        $("#"+iddiv).html("<img src='{{ asset('portal/images/caneb/cargando_caneb.gif') }}' width='150' height='150'>");
        var options = {
            chart: {
                renderTo: iddiv,
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                borderColor: '#d7e2ea',
                borderWidth: 0.5,
                type: 'column'
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
                text: '(En millones de dolares)'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y:.2f} MM$us</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            legend: {
                enabled: true
            },
            plotOptions: {
                column: {
                    borderRadius: 3,
                    dataLabels: {
                        enabled: false,
                        format: '{y:.2f}'
                    }
                },
                scatter: {
                    dataLabels: {
                        enabled: true,
                        shadow: true
                    },
                    enableMouseTracking: true
                }
            },
            xAxis: {
                categories: [],
                labels:{
                    //rotation: -90,
                    //align: 'right',
                    style: {
                        color: '#000000',
                        fontSize: '9px'
                    }
                }
            },
            yAxis: [{
                title: {
                    text: 'Valor exportado'
                }
            }, {
                title: {
                    text: 'Variacion (%)'
                },
                opposite: true
            }],
            series: [{
                name: 'X',
                color: Highcharts.getOptions().colors[2],
                borderWidth: 1
            },{
                name: 'Y',
                color: Highcharts.getOptions().colors[3],
                borderWidth: 1
            }, {
                name: 'Variacion',
                type: 'scatter',
                color: 'rgba(186,60,61,.9)',
                data: [4.6, 23.8, 14.5, 22.3],
                tooltip: {
                    valueSuffix: ' %'
                },
                pointPadding: 0.4,
                pointPlacement: 0,
                yAxis: 1
            }]
        };
        $.ajax({
            url: "{{ route('graph.exportSectorComparativo') }}",
            data: 'x='+xprod+'&gi='+gestion_ini+'&gf='+gestion_fin+'&am='+ames+'&filtros='+JSON.stringify(filtros),
            type:'get',
            dataType: "json",
            success: function(data){
                mesAcumulado=data.mes;
                options.subtitle.text = '(En porcentaje)';
                options.title.text = data.titulo;
                options.xAxis.categories = data.categoria;
                options.series[0].data = data.datos2;
                options.series[0].name = data.gestion-1;
                options.series[1].data = data.datos;
                options.series[1].name = data.gestion;
                var chart = new Highcharts.Chart(options);
            }
        });
    }
</script>