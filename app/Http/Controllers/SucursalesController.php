<?php

namespace App\Http\Controllers;
use App\Models\Departamentos;
use App\Models\Municipios;
use App\Models\Empresas;
use App\Models\Sucursales;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class SucursalesController extends Controller
{
    /**
     * llama la vista de sucursales principal 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursales = Sucursales::all();
        $empresa = Empresas::all();
        $municipio = Municipios::all();
        $departamento = Departamentos::all();
        return view('sucursales.sucursales', compact('sucursales', 'empresa','municipio', 'departamento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sucursal = request()->all();
        $sucursal = request()->except('_token');
        Sucursales::insert($sucursal);
        return back()->with('mensaje', '¡La sucursal se creo correctamente!');
    }

    /**
     * en este metodo se detalla las curusales 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sucursal = Sucursales::findOrfail($id);
        return view('sucursales.detalle',compact('sucursal'));
    }

    /**
     * en este metodo llamo la vista y mando los respectivos datos de las llaves foraneas que tiene la tabla sucursales
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresas::all();
        $municipio = Municipios::all();
        $departamento = Departamentos::all();
        $sucursal = Sucursales::findOrfail($id);
        return view('sucursales.edit',compact('sucursal', 'empresa','municipio', 'departamento'));
    }

    /**
     * se actualiza la sucursal 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sucursal = request()->all();
        $sucursal = request()->except('_method', '_token');
        Sucursales::where('id', '=', $id)->update($sucursal);
        return back()->with('mensaje', '¡se Modifico correctamente!');
    }

    /**
     * Elimina la sucursal mandada por id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $sucursal=Sucursales::findOrFail($id);
        Sucursales::destroy($sucursal->id);
         return back()->with('mensaje', '¡se elimino correctamente la sucursal!');
    }
}
