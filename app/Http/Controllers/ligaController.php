<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Liga;

class ligaController extends Controller
{
    public function list(){
        
        $dato=Liga::select("*")->get();
     
         return response()->json($dato);
     }
 
    public function registrar(Request $request){
 
         $newLiga=new Liga();

            $newLiga->nombre=$request->nombre;
            $newLiga->fecha_registro=$request->fecha_registro;
            $newLiga->fecha_termino=$request->fecha_termino;
            $newLiga->cantidad_fechas=$request->cantidad_fechas;
 
            $newLiga->save();
 
         return response()->json(['mesaje'=>"se registro correctamente"],201);
     }
 
 
    public function actualizar($id,Request $request){
         
         $ActualLiga=Liga::find($id);
 
         if(!$ActualLiga){
             return response()->json(['mesaje'=>"no exite este Liga"],404);
         }
 
         $ActualLiga->nombre=$request->nombre;
         $ActualLiga->fecha_registro=$request->fecha_registro;
         $ActualLiga->fecha_termino=$request->fecha_termino;
         $ActualLiga->cantidad_fechas=$request->cantidad_fechas;

         $ActualLiga->save();
 
         return response()->json(['mesaje'=>"se actualizo correctamente"],201);
 
 
     }
    public function eliminar($id){
        $ActualLiga=Liga::find($id);

        if(!$ActualLiga){
            return response()->json(['mesaje'=>"no exite este Liga"],404);
        }

        $ActualLiga->delete();

        return response()->json(['mesaje'=>"se elimino correctamente"],201);


    }
}
