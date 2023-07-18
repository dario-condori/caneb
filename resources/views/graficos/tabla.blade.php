<div class="features-item">
    <div class=""><h4><b>{{$tabla['titulo']}}</b></h4></div>
    <table class="table table-striped table-border checkout-table">
        <tbody>
            <tr>
                @foreach($tabla['columnas'] as $col)
                <th>{{$col}}</th>
                @endforeach
            </tr>
            @php($i=0)
            @foreach($tabla['datos'] as $fila)
            @php($i++)
            <tr>
                @foreach($fila as $col)
                @if($col)<th>{{$col}}</th>
                @else<th> </th>
                @endif
                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>
</div>