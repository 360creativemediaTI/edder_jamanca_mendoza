<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jugador;

class jugadorController extends Controller
{
        //
        public function list(){
        
            $dato=Jugador::select("*")->get();
         
             return response()->json($dato);
         }
     
        public function registrar(Request $request){
     
             $newJugador=new Jugador();
    
                $newJugador->idequipo=$request->idequipo;
                $newJugador->nombre=$request->nombre;
                $newJugador->apellido=$request->apellido;
                $newJugador->edad=$request->edad;
     
                $newJugador->save();
     
             return response()->json(['mesaje'=>"se registro correctamente"],201);
         }
     
     
        public function actualizar($id,Request $request){
             
             $ActualJugador=Jugador::find($id);
     
             if(!$ActualJugador){
                 return response()->json(['mesaje'=>"no exite este Jugador"],404);
             }
     
             $ActualJugador->idequipo=$request->idequipo;
             $ActualJugador->nombre=$request->nombre;
             $ActualJugador->apellido=$request->apellido;
             $ActualJugador->edad=$request->edad;
  
             $ActualJugador->save();
     
             return response()->json(['mesaje'=>"se actualizo correctamente"],201);
     
     
         }
        public function eliminar($id){
             $ActualJugador=Jugador::find($id);
     
             if(!$ActualJugador){
                 return response()->json(['mesaje'=>"no exite este Jugador"],404);
             }
     
             $ActualJugador->delete();
     
             return response()->json(['mesaje'=>"se elimino correctamente"],201);
     
     
         }
}
