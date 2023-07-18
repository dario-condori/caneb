<script type="text/javascript">
    $(document).ready(function() {
        let fil = <?php echo json_encode($filtros); ?>;
        load_graphHcExportPrincipalProd("{{ $id_div }}", {{ $xprod }}, {{ $gestion_ini }}, {{ $gestion_fin }}, {{ $ames }}, fil);
    });
    
    function load_graphHcExportPrincipalProd(iddiv, xprod, gestion_ini, gestion_fin, ames, filtros){
        $("#"+iddiv).html("<center><img src='{{ asset('portal/images/caneb/cargando_caneb.gif') }}' width='150' height='150'></center>");
        var options = {
            chart: {
                renderTo: iddiv,
                marginBottom: 90,
                borderColor: '#d7e2ea',
                borderWidth: 0.1,
                type: 'column'
            },
            title: {
                text: '',
                style: {
                    color: '#000000',
                    font: 'bold 14px "Lucida Sans Unicode", "Lucida Grande", sans-serif'
                }
            },
            subtitle: {
                text: '(En millones de usd)'
            },
            credits: {
                text: 'Elaborado: CANEB en base a fuente INE',
                href: 'http://http://caneb.org/'
            },
            xAxis: {
                categories: [{}],
                labels:{
                    rotation: -90,
                    align: 'right',
                    style: {
                        color: '#000000',
                        fontSize: '9px'
                    }
                }
            },
            yAxis: {
                title: {
                    text: '(En millones de $us)'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.2f}'
                    }
                }
            },
            tooltip: {
                crosshairs: true,
                formatter: function () {
                    return this.points.reduce(function (s, point) {
                        return s + '<br/>' + '<b>' + point.series.name + '</b>' + ': ' + Highcharts.numberFormat(point.y,2) + ' MM$us';
                    }, '' + this.x + '');
                },
                shared: true
            },
            series: [
            {
                name: 'Valor',
                color: Highcharts.getOptions().colors[7],
            }]
        };
        $.ajax({
            url: "{{ route('graph.exportPrinProdPaiDepGes') }}",
            data: 'x='+xprod+'&gi='+gestion_ini+'&gf='+gestion_fin+'&am='+ames+'&filtros='+JSON.stringify(filtros),
            type:'get',
            dataType: "json",
            success: function(data){
                mesAcumulado=data.mes;
                options.xAxis.categories = data.nandinas;
                options.title.text = data.titulo;
                options.series[0].data = data.datos;
                var chart = new Highcharts.Chart(options);
                //chart.series[1].hide();
            }
        });
    }
</script>