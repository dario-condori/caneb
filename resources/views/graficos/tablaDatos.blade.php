<script type="text/javascript">
    $(document).ready(function() {
        let fil = <?php echo json_encode($filtros); ?>;
        load_tablaDatos("{{ $id_div }}", {{ $xprod }}, {{ $gestion_ini }}, {{ $gestion_fin }}, {{ $ames }}, fil);
    });
    
    function load_tablaDatos(iddiv, xprod, gestion_ini, gestion_fin, ames, filtros){
        $("#"+iddiv).html("<img src='{{ asset('portal/images/caneb/cargando_caneb.gif') }}' width='150' height='150'>");

        $.ajax({
            url: "{{ route('graph.exportTablaProdActividad') }}",
            data: 'x='+xprod+'&gi='+gestion_ini+'&gf='+gestion_fin+'&am='+ames+'&filtros='+JSON.stringify(filtros),
            type:'get',
            dataType: "html",
            success: function(data){
                $("#"+iddiv).html(data);
                //mesAcumulado=data.mes;
                //options.xAxis.categories = data.gestiones;
                //options.title.text = data.titulo;
                //options.series[0].data = data.exportacion;
                //options.series[1].data = data.importacion;
                //options.series[2].data = data.saldo;
                //var chart = new Highcharts.Chart(options);
                //chart.series[1].hide();
            }
        });
    }
</script>