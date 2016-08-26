<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Empresa;

use DB;
class EmpresaController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('empresa');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$empresas = DB::table('nomempresa')->get();
		return view('empresa.empresa',compact('empresas'));	}


	public function show($id)
	{
		return view('empresa.empresa');
	}


	public function listar()
	{
		$empresas = DB::table('nomempresa')->get();
		return view('empresa.empresa',compact('empresas'));
	}


	public function create()
	{
		return view('empresa.registrar');
	}


	public function store(Request $request)
    {

    	DB::table('nomempresa')->insert(
			    ['nombre' => $request->input('name'),
			    'bd' => $request->input('Administratrivo'),
			    'bd_contabilidad' => $request->input('Contabilidad'),
			    'bd_nomina' => $request->input('Nomina')]
			);
    	return redirect('/empresa')->with('message','store');

   	}
   	public function update(Request $request,$id)
   	{
   		DB::table('nomempresa')->where('codigo', $id)->
   		update([
			'nombre'          => $request->nombre,
			'bd'              => $request->bd,
			'bd_contabilidad' => $request->bd_contabilidad,
			'bd_nomina'       => $request->bd_nomina
   		]);
		return redirect()->route('empresa.index')->with('success','Empresa Actualizada exitosamente');

	}

	public function edit($id)
	{
		$empresas = DB::table('nomempresa')->where('codigo', '=', $id)->get();
		//$empresas->nombre = $empresa->nombre;
		//echo $empresa[0]->nombre;
		//print_r($empresa);
		return view('empresa.editar')->with('empresas',$empresas);
		
	}

	public function destroy($id)
    {
    	$empresa = Empresa::where('codigo',$id);
        $empresa->delete();
    	return redirect('/')->with('success','Empresa Eliminada exitosamente');
        
                        
    }


}