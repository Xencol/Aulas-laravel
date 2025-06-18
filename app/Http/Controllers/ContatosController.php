<?php
 
namespace App\Http\Controllers;
 
use App\Models\Contatos;
use Illuminate\Http\Request;
 
class ContatosController extends Controller
{
    public function index()
    {
        $findContatos = Contatos::get();
 
        return view('pages.contatos.index', compact('findContatos'));
    }
 
    public function delete($idUser)
    {
        $buscarRegistro = Contatos::find($idUser);
        $buscarRegistro->delete();
 
        return back();
    }
 
    public function create(Request $request)
    {
 
        //condicional para entendimento do envio dos dados para o banco de dados
        if ($request->method() == "POST") {
            $data = $request->all();
            Contatos::create($data);
 
            return redirect('/contatos');
        }
 
        return view('pages.contatos.create');
    }
}

