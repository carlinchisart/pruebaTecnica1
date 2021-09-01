<label>Repartidor</label>
<select name="sRepartidor" onchange="consultarManifiestosRepartidor(this)">
    <option value="">Seleccione</option>
    @foreach ($camiones as $camion)
        <option value="{{$camion->repartidor_id}}">{{$camion->repartidor->nombre}}</option>
    @endforeach
</select>
