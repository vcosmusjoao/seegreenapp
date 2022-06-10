<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresa;
class EmpresaController extends Controller
{

    public function getAllEmpresas()
    {
        return Empresa::all();
    }
    public function saveEmpresa(Request $request)
    {
        $empresa = new Empresa;
        $empresa->nome = $request->nome;
        $empresa->cnpj = $request->cnpj;
        $empresa->descricao = $request->descricao;
        $empresa->foto = $request->foto;
        $empresa->save();
    
        return response()->json([
            "message" => "empresa created"
        ], 201);
    }

    public function getEmpresaById($id)
    {
        if (Empresa::where('id', $id)->exists()) {
            $empresa = Empresa::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($empresa, 200);
          } else {
            return response()->json([
              "message" => "Empresa not found"
            ], 404);
          }
    }


    public function deleteById($id)
    {
        if(Empresa::where('id', $id)->exists()) {
            $empresa = Empresa::find($id);
            $empresa->delete();
    
            return response()->json([
              "message" => "records deleted"
            ], 202);
          } else {
            return response()->json([
              "message" => "Empresa not found"
            ], 404);
          }
        }
    


}
