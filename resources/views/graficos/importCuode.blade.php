<script type="text/javascript">
    $(document).ready(function() {
        let fil = <?php echo json_encode($filtros); ?>;
        load_graphHcImportCuode("{{ $id_div }}", {{ $xprod }}, {{ $gestion_ini }}, {{ $gestion_fin }}, {{ $ames }}, fil);
    });
	
    function load_graphHcImportCuode(iddiv, xprod, gestion_ini, gestion_fin, ames, filtros){
        $("#"+iddiv).html("<img src='{{ asset('portal/images/caneb/cargando_caneb.gif') }}' width='150' height='150'>");
        var options = {
            chart: {
                renderTo: iddiv,
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                borderColor: '#d7e2ea',
                borderWidth: 0.5,
                type: 'pie'
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
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.2f} %'
                    },
                    showInLegend: true
                }
            },
            series: [
            {
                name: 'Sector',
                color: '#47af2c',
                borderColor: '#5a8610',
                borderWidth: 1
            }]
        };
        $.ajax({
            url: "{{ route('graph.importCuode') }}",
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