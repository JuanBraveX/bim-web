<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\Personale;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * Class PersonalController
 * @package App\Http\Controllers
 */
class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personals = Personal::paginate();

        return view('personal.index', compact('personals'))
            ->with('i', (request()->input('page', 1) - 1) * $personals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personal = new Personal();
        return view('personal.create', compact('personal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Personal::$rules);

        
        $personal = new Personal;
        $personal->nombre = $request->nombre;
        $personal->email = $request->email;
        $personal->empresa = $request->empresa;
        $personal->area = $request->area;
        $personal->descripcion = $request->descripcion;
        $personal->twiter = $request->twiter;
        $personal->facebook = $request->facebook;
        $personal->instagram = $request->instagram;
        $personal->linkedin = $request->linkedin;
        $personal->valoracion = $request->valoracion;

        // Guardar el archivo
        if ($request->hasFile('img')) {
            $nombreArchivoOriginal = $request->file('img')->getClientOriginalName();
            $nuevoNombre = Carbon::now()->timestamp . "_Personales" . "_" . $nombreArchivoOriginal;
            $carpetaDestino = './Personales/';
            $request->file('img')->move($carpetaDestino, $nuevoNombre);
            $personal->img = ltrim($carpetaDestino, '.') . $nuevoNombre;
        }

        $personal->save();

        return redirect()->route('personals.index')
            ->with('success', 'Personal created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personal = Personal::find($id);

        return view('personal.show', compact('personal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personal = Personal::find($id);

        return view('personal.edit', compact('personal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Personal $personal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personal $personal)
    {
        request()->validate(Personal::$rules);

        $personal->update($request->all());

        return redirect()->route('personals.index')
            ->with('success', 'Personal updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $personal = Personal::find($id)->delete();

        return redirect()->route('personals.index')
            ->with('success', 'Personal deleted successfully');
    }
    
    public function getAllpersonal()
    {
        $empleadoo = Personal::all();
        return response()->json($empleadoo);
    }
}
