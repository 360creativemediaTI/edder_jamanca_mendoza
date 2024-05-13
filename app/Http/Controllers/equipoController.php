<?php

namespace App\Http\Controllers;

use App\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class equipoController extends Controller
{
    //
    public function list(){
        
       $dato=Equipo::select("*")->get();
    
        return response()->json($dato);
    }

    public function registrar(Request $request){



        $newequipo=new Equipo();

        $newequipo->nombre=$request->nombre;

        $newequipo->save();

        return response()->json(['mesaje'=>"se registro correctamente"],201);
    }


    public function actualizar($id,Request $request){
        
        $Actualequipo=Equipo::find($id);

        if(!$Actualequipo){
            return response()->json(['mesaje'=>"no exite este equipo"],404);
        }

        $Actualequipo->nombre=$request->nombre;

        $Actualequipo->save();

        return response()->json(['mesaje'=>"se actualizo correctamente"],201);


    }
    public function eliminar($id){
        $Actualequipo=Equipo::find($id);

        if(!$Actualequipo){
            return response()->json(['mesaje'=>"no exite este equipo"],404);
        }

        $Actualequipo->delete();

        return response()->json(['mesaje'=>"se elimino correctamente"],201);


    }
}
