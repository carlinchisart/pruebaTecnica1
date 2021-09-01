<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nomina</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <label>Finca</label>
        <select name="sFinca" onchange="consultarCamionesFinca(this)">
            <option value="">Seleccione</option>
            @foreach ($fincas as $finca)
                <option value="{{$finca->id}}">{{$finca->nombre}}</option>
            @endforeach
        </select>
        <div id="divRepartidores">

        </div>
        <div id="divManifiestos">

        </div>

    </body>
    <script type="text/javascript">
    function consultarCamionesFinca(select)
    {
        var fincaId = $(select).val();
        if(isNaN(fincaId)) {
            return;
        }
        $.ajax({
            url: '/finca/'+fincaId,
            dataType: 'json',
            success:function(response)
            {
                if(response.success) {
                    $("#divRepartidores").html(response.html);
                }else {
                    alert(response.html);
                }
            }
        })
    }

    function consultarManifiestosRepartidor(select)
    {
        var camionId = $(select).val();
        if(isNaN(camionId)) {
            return;
        }
        $.ajax({
            url: '/manifiestos/'+camionId,
            success:function(response)
            {
                if(response.success) {
                    $("#divManifiestos").html(response.html);
                }else {
                    alert(response.html);
                }
            }
        })
    }
    </script>
</html>
