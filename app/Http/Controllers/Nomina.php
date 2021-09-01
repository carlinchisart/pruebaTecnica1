<?php

namespace App\Http\Controllers;

use App\Models\Camion;
use App\Models\Finca;
use App\Models\Manifiesto;
use App\Models\Repartidor;
use Illuminate\Http\Request;

class Nomina extends Controller
{
    public function index()
    {
        $fincas = Finca::all();
        $repartidores = Repartidor::all();
        return view('nomina',compact('repartidores','fincas'));
    }

    public function manifiestos($camion_id)
    {

        $camiones = Camion::where('repartidor_id',$camion_id)->get();
        if($camiones->isEmpty()){
            return array('success' =>false, 'html' => 'No hay camiones para ese repartidor en esta finca');
        }

        return array('success' =>true , 'html' => view('manifiestosCamion',compact('camiones'))->render() );
    }

    public function repartidoresFinca($id)
    {
        $camiones = Camion::where('finca_id',$id)->get();
        if($camiones->isEmpty())
        {
            return array('success' =>false, 'html' => 'No hay repartidores esta finca');
        }

        return array('success' => true, 'html' => view('repartidoresFinca',compact('camiones'))->render());
    }

}
