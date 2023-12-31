<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;
class CrudController extends Controller
{
    public function index (){
        return view('auth.register');
    }

    public function registrar(Request $request){
        User::create([
            "name" => $request->name,
            'cedula' => $request->cedula,
            "direccion" => $request->direccion,
            "telefono" => $request->telefono,
            "correo" => $request->email
        ]);
        return redirect()->route("listarUsuarios");
    }

    public function listar(){
        $datos=DB::select('select * from users');
        return view('auth.listar')->with("datos",$datos);
    }
    public function buscar($id){
        $usuario=User::find($id);
        return view('auth.actualizar')->with("datos",$usuario);
    }
    public function actualizar(Request $request, $id){

        $usuario=User::find($id);
        $usuario->update([
                "name" => $request->name,
                'cedula' => $request->cedula,
                "direccion" => $request->direccion,
                "telefono" => $request->telefono,
                "correo" => $request->email
        ]);
        return redirect()->route("listarUsuarios");
    }
    public function Eliminar($id){
        User::findOrFail($id)->delete();
        return redirect()->route("listarUsuarios");
    }

}
