<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agricultor;
class AgricultorController extends Controller
{

    public function getAllAgricultores()
    {
        return Agricultor::all();
    }
    public function saveAgricultor(Request $request)
    {
        $agricultor = new Agricultor;
        $agricultor->nome = $request->nome;
        $agricultor->descricao = $request->descricao;
        $agricultor->foto = $request->foto;
        $agricultor->save();
    
        return response()->json([
            "message" => "agricultor created"
        ], 201);
    }

    public function getAgricultorById($id)
    {
        if (Agricultor::where('id', $id)->exists()) {
            $agricultor = Agricultor::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($agricultor, 200);
          } else {
            return response()->json([
              "message" => "Agricultor not found"
            ], 404);
          }
    }


    public function deleteById($id)
    {
        if(Agricultor::where('id', $id)->exists()) {
            $agricultor = Agricultor::find($id);
            $agricultor->delete();
    
            return response()->json([
              "message" => "records deleted"
            ], 202);
          } else {
            return response()->json([
              "message" => "Agricultor not found"
            ], 404);
          }
        }
    


}
