<?php

namespace App\Http\Controllers;

use App\Models\Cava;
use App\Models\ProductoDerivado;
use App\Models\Programa;
use App\Models\Usuario;
use App\Models\FlujoDeCava;
use 

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Contracts\Routing\ResponseFactory;
use Session;
use Input;

use Illuminate\Database\Eloquent\Builder;

class FlujoProductoDerivadoControlador extends Controller {

protected function getRegistrarLoteProductoDerivado(Request $request) {

return view("LoteProductoDerivado.registrarLoteProductoDerivado");
}
protected function postRegistrarLoteProductoDerivado(Resquest $request){


$loteProductoDerivado = new LoteDeProductoDerivado;

$loteProductoDerivado->numero_de_lote=$request['numero_de_lote'];
$loteProductoDerivado->flujo_de_cava=$request['flujo_de_cava'];

$loteProductoDerivado->save();


}
protected function getEditarLoteProductoDerivado(Request $request) {

return view("LoteProductoDerivado.editarLoteProductoDerivado");
}
protected function postEditarLoteProductoDerivado(Resquest $request){


}
protected function getListarLoteProductoDerivado(Request $request) {

return view("LoteProductoDerivado.listarLoteProductoDerivado");
}
protected function postListarLoteProductoDerivado(Resquest $request){


}
protected function getEliminarLoteProductoDerivado(Request $request) {


}
protected function postEliminarLoteProductoDerivado(Resquest $request){


}


}