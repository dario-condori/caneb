<script type="text/javascript">
    $(document).ready(function() {
        let fil = <?php echo json_encode($filtros); ?>;
        load_graphHcSaldoAcumulado("{{ $id_div }}", {{ $xprod }}, {{ $gestion_ini }}, {{ $gestion_fin }}, {{ $ames }}, fil);
    });
    
    function load_graphHcSaldoAcumulado(iddiv, xprod, gestion_ini, gestion_fin, ames, filtros){
        $("#"+iddiv).html("<img src='{{ asset('portal/images/caneb/cargando_caneb.gif') }}' width='150' height='150'>");
        var options = {
            chart: {
                renderTo: iddiv,
                marginBottom: 90,
                borderColor: '#d7e2ea',
                borderWidth: 0.2,
                type: 'line'
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
                name: 'Exportación',
            },
            {
                name: 'Importación',
            },
            {
                name: 'Saldo Comercial',
                type: 'column',
            }]
        };
        $.ajax({
            url: "{{ route('graph.saldoComercial') }}",
            data: 'x='+xprod+'&gi='+gestion_ini+'&gf='+gestion_fin+'&am='+ames+'&filtros='+JSON.stringify(filtros),
            type:'get',
            dataType: "json",
            success: function(data){
                mesAcumulado=data.mes;
                options.xAxis.categories = data.gestiones;
                options.title.text = data.titulo;
                options.series[0].data = data.exportacion;
                options.series[1].data = data.importacion;
                options.series[2].data = data.saldo;
                var chart = new Highcharts.Chart(options);
                //chart.series[1].hide();
            }
        });
    }
</script>