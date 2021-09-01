<table border="1">
<thead>
    <tr>
        <th>Fecha</th>
        <th>Cantidad lotes</th>
        <th># Entregados</th>
        <th># Devueltos</th>
        <th>ValorBase</th>
        <th>Valor Entregados</th>
        <th>Valor No Entregados</th>
        <th>Total</th>
    </tr>
</thead>
<tbody>
    @foreach ($camiones  as $camion)
        <tr>
            <td colspan="8">Camion: {{$camion->id}}</td>
        </tr>
        @foreach ($camion->manifiestos as $manifiesto)
            @php
                $cantEntregados = $manifiesto->lotes->where('pivot.estado','ENTREGADO')->count();
                $cantDevueltos = $manifiesto->lotes->where('pivot.estado','DEVUELTO')->count();
                $valorBase = 50000;
                $valorEntregados = $cantEntregados * 10000;
                $valorDevueltos = $cantDevueltos *5000;
                $total = ( $valorBase + $valorEntregados) - $valorDevueltos;
                if($total < 0){
                    $total = $valorBase;
                }
            @endphp
            <tr>
                <td>{{$manifiesto->created_at}}</td>
                <td>{{$manifiesto->lotes->count()}}</td>
                <td>{{$cantEntregados}}</td>
                <td>{{$cantDevueltos}}</td>
                <td>${{number_format($valorBase)}}</td>
                <td>${{number_format($valorEntregados)}}</td>
                <td>-${{number_format($valorDevueltos)}}</td>
                <td>${{number_format($total)}}</td>
            </tr>
        @endforeach
    @endforeach

</tbody>
</table>
