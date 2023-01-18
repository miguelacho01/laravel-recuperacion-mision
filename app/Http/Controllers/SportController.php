<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Sport;

class SportController extends Controller
{
    public function index(){
       return Sport::get();
    }


    public function show($id){

       return Sport::find($id);
    }


    public function store(Request $request){
        try {
            $request->validate([
                'name'  => 'string|required|',
                'description' => 'string|required|',
               
            ]);
        }catch (\Throwable $th){
            return response()->json(['error' => $th->getMessage()],400);
        }

        Sport::created([
            'name'=>$request->name,
            'description'=>$request->description,


        ]);

        return 'sport creado';
    }

    public function update(Request $request, $id){

        try {
            $request->validate([
                'name'=>'string',
                'description' => 'string|required|',
               
            ]);

        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 400);
        }
        Sport::find($id)->update([
            'name' => $request->name,
            'description'=>$request->description,
           
        ]);
        return 'Actualizado correctamente';
    }

    public function destroy($id){
        Sport::find($id)->delete();
        return 'Eliminar un cliente';
    }



}
