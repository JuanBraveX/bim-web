<?php

namespace App\Http\Controllers;

use App\Models\Empleadoo;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

/**
 * Class EmpleadooController
 * @package App\Http\Controllers
 */
class EmpleadooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleadoos = Empleadoo::paginate();

        return view('empleadoo.index', compact('empleadoos'))
            ->with('i', (request()->input('page', 1) - 1) * $empleadoos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleadoo = new Empleadoo();
        return view('empleadoo.create', compact('empleadoo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Empleadoo::$rules);
        $empleadoo = new Empleadoo;
        $empleadoo->nombre = $request->nombre;
        $empleadoo->apellidos = $request->apellidos;
        $empleadoo->email = $request->email;
        $empleadoo->empresa = $request->empresa;
        $empleadoo->area = $request->area;
        $empleadoo->descripcion = $request->descripcion;
        $empleadoo->fecha = $request->fecha;
        $empleadoo->twiter = $request->twiter;
        $empleadoo->facebook = $request->facebook;
        $empleadoo->instagram = $request->instagram;
        $empleadoo->linkedin = $request->linkedin;
        $empleadoo->valoracion = $request->valoracion;

        if ($request->hasFile('img')) {
            $nombreArchivoOriginal = $request->file('img')->getClientOriginalName();
            $nuevoNombre = Carbon::now()->timestamp . "_empleadoo" . "_" . $nombreArchivoOriginal;
            $carpetaDestino = './empleadoo/';

            $request->file('img')->move($carpetaDestino, $nuevoNombre);

            $empleadoo->img = ltrim($carpetaDestino, '.') . $nuevoNombre;
        }

        $empleadoo->save();

        return redirect()->route('empleadoos.index')
            ->with('success', 'Empleadoo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleadoo = Empleadoo::find($id);

        return view('empleadoo.show', compact('empleadoo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleadoo = Empleadoo::find($id);

        return view('empleadoo.edit', compact('empleadoo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Empleadoo $empleadoo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleadoo $empleadoo)
    {
        request()->validate(Empleadoo::$rules);

        // Eliminar la imagen anterior si se envía una nueva imagen
        if ($request->hasFile('img')) {
            // Eliminar la imagen anterior si existe
            if (!empty($empleadoo->img)) {
                Storage::disk('public')->delete($empleadoo->img);
            }

            // Guardar la nueva imagen
            $nombreArchivoOriginal = $request->file('img')->getClientOriginalName();
            $nuevoNombre = Carbon::now()->timestamp . "_empleadoo" . "_" . $nombreArchivoOriginal;
            $carpetaDestino = './empleadoo/';

            $request->file('img')->move($carpetaDestino, $nuevoNombre);

            $empleadoo->img = ltrim($carpetaDestino, '.') . $nuevoNombre;
        }
        // Actualizar los demás campos
        $empleadoo->nombre = $request->nombre;
        $empleadoo->apellidos = $request->apellidos;
        $empleadoo->email = $request->email;
        $empleadoo->empresa = $request->empresa;
        $empleadoo->area = $request->area;
        $empleadoo->descripcion = $request->descripcion;
        $empleadoo->fecha = $request->fecha;
        $empleadoo->twiter = $request->twiter;
        $empleadoo->facebook = $request->facebook;
        $empleadoo->instagram = $request->instagram;
        $empleadoo->linkedin = $request->linkedin;
        $empleadoo->valoracion = $request->valoracion;
        $empleadoo->save();

        return redirect()->route('empleadoos.index')
            ->with('success', 'Empleadoo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $empleadoo = Empleadoo::find($id);
        $rutaArchivo = public_path($empleadoo->img);

        if (file_exists($rutaArchivo)) {
            unlink($rutaArchivo);
        }
        $empleadoo->delete();

        return redirect()->route('empleadoos.index')
            ->with('success', 'Empleadoo deleted successfully');
    }

    public function getAllempleadoos()
    {
        $empleadoo = Empleadoo::all();
        return response()->json($empleadoo);
    }
}
