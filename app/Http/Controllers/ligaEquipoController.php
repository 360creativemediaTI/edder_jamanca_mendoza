<?php

namespace App\Http\Controllers;

use App\Liga_equipo;
use Illuminate\Http\Request;

class ligaEquipoController extends Controller
{

    public function list(){
        
        $dato=Liga_equipo::select("*")->get();
     
         return response()->json($dato);
     }
 
    public function registrar(Request $request){
 
         $newLiga_equipo=new Liga_equipo();

            $newLiga_equipo->idliga=$request->idliga;
            $newLiga_equipo->idequipo=$request->idequipo;
 
            $newLiga_equipo->save();
 
         return response()->json(['mesaje'=>"se registro correctamente"],201);
     }
 
 
    public function actualizar($id,Request $request){
        
         $ActualLiga_equipo=Liga_equipo::find($id);
 
         if(!$ActualLiga_equipo){
             return response()->json(['mesaje'=>"no exite este Liga_equipo"],404);
         }
 
         $ActualLiga_equipo->idliga=$request->idliga;
         $ActualLiga_equipo->idequipo=$request->idequipo;

         $ActualLiga_equipo->save();
 
         return response()->json(['mesaje'=>"se actualizo correctamente"],201);
 
 
     }
    public function eliminar($id){
        $ActualLiga_equipo=Liga_equipo::find($id);

        if(!$ActualLiga_equipo){
            return response()->json(['mesaje'=>"no exite este Liga_equipo"],404);
        }

        $ActualLiga_equipo->delete();

        return response()->json(['mesaje'=>"se elimino correctamente"],201);


    }
}
