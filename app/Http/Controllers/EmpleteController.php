<?php

namespace App\Http\Controllers;

use App\Models\Emplete;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

/**
 * Class EmpleteController
 * @package App\Http\Controllers
 */
class EmpleteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empletes = Emplete::paginate();

        return view('emplete.index', compact('empletes'))
            ->with('i', (request()->input('page', 1) - 1) * $empletes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emplete = new Emplete();
        return view('emplete.create', compact('emplete'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar campos del formulario

        $empleado = new Emplete;
        $empleado->nombre = $request->nombre;
        $empleado->apellidos = $request->apellidos;
        $empleado->email = $request->email;
        $empleado->telefono = $request->telefono;
        $empleado->fechanacimento = $request->fechanacimento;
        $empleado->estudios = $request->estudios;
        $empleado->area = $request->area;
        $empleado->status = $request->status;

        // Guardar el archivo
        if ($request->hasFile('cv')) {
            $nombreArchivoOriginal = $request->file('cv')->getClientOriginalName();
            $nuevoNombre = Carbon::now()->timestamp . "_empleate" . "_" . $nombreArchivoOriginal;
            $carpetaDestino = './empleate/';
            $request->file('cv')->move($carpetaDestino, $nuevoNombre);
            $empleado->cv = ltrim($carpetaDestino, '.') . $nuevoNombre;
        }

        $empleado->mensaje = $request->mensaje;

        $destinatario = 'reclutamiento@binmotion.com.mx';
        Mail::send('mails.index', [
            'nombre' => $empleado->nombre,
            'apellidos' => $empleado->apellidos,
            'email' => $empleado->email,
            'telefono' => $empleado->telefono,
            'fechanacimiento' => $empleado->fechanacimento,
            'estudios' => $empleado->estudios,
            'area' => $empleado->area,
            'status' => $empleado->status,
            'mensaje' => $empleado->mensaje,
            'cv' => $empleado->cv
        ], function ($message) use ($destinatario) {
            $message->to($destinatario)
                ->subject('Nuevo Empleador');
        });
        $empleado->save();

        return redirect()->route('empletes.index')->with('success', 'Emplete created successfully.');
    }

    public function storeP(Request $request)
    {
        // Validar campos del formulario

        $empleado = new Emplete;
        $empleado->nombre = $request->nombre;
        $empleado->apellidos = $request->apellidos;
        $empleado->email = $request->email;
        $empleado->telefono = $request->telefono;
        $empleado->fechanacimento = $request->fechanacimento;
        $empleado->estudios = $request->estudios;
        $empleado->area = $request->area;
        $empleado->status = $request->status;

        // Guardar el archivo
        if ($request->hasFile('cv')) {
            $nombreArchivoOriginal = $request->file('cv')->getClientOriginalName();
            $nuevoNombre = Carbon::now()->timestamp . "_empleate" . "_" . $nombreArchivoOriginal;
            $carpetaDestino = './empleate/';
            $request->file('cv')->move($carpetaDestino, $nuevoNombre);
            $empleado->cv = ltrim($carpetaDestino, '.') . $nuevoNombre;
        }

        $empleado->mensaje = $request->mensaje;

        $destinatario = 'reclutamiento@binmotion.com.mx';
        Mail::send('mails.index', [
            'nombre' => $empleado->nombre,
            'apellidos' => $empleado->apellidos,
            'email' => $empleado->email,
            'telefono' => $empleado->telefono,
            'fechanacimiento' => $empleado->fechanacimento,
            'estudios' => $empleado->estudios,
            'area' => $empleado->area,
            'status' => $empleado->status,
            'mensaje' => $empleado->mensaje,
            'cv' => $empleado->cv
        ], function ($message) use ($destinatario) {
            $message->to($destinatario)
                ->subject('Nuevo Empleador');
        });
        $empleado->save();

        return redirect()->route('empleat')->with('success', 'Mucho gusto, nos contactaremos en la brevedad.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emplete = Emplete::find($id);

        return view('emplete.show', compact('emplete'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emplete = Emplete::find($id);

        return view('emplete.edit', compact('emplete'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Emplete $emplete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emplete $emplete)
    {
        request()->validate(Emplete::$rules);
        if ($request->hasFile('cv')) {
            if (Storage::disk('public')->exists($emplete->cv)) {
                Storage::disk('public')->delete($emplete->cv);
            }
        }

        $emplete->nombre = $request->nombre;
        $emplete->apellidos = $request->apellidos;
        $emplete->email = $request->email;
        $emplete->telefono = $request->telefono;
        $emplete->fechanacimento = $request->fechanacimento;
        $emplete->estudios = $request->estudios;
        $emplete->area = $request->area;
        $emplete->status = $request->status;

        if ($request->hasFile('cv')) {
            $rutaArchivo = public_path($emplete->cv);

            if (file_exists($rutaArchivo)) {
                unlink($rutaArchivo);
            }

            $nombreArchivoOriginal = $request->file('cv')->getClientOriginalName();
            $nuevoNombre = Carbon::now()->timestamp . "_empleate" . $nombreArchivoOriginal;
            $carpetaDestino = './empleate/';

            $request->file('cv')->move($carpetaDestino, $nuevoNombre);
            $emplete->cv = ltrim($carpetaDestino, '.') . $nuevoNombre;
        }

        $emplete->save();

        return redirect()->route('empletes.index')->with('success', 'Emplete updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $emplete = Emplete::find($id);
        $rutaArchivo = public_path($emplete->cv);

        if (file_exists($rutaArchivo)) {
            unlink($rutaArchivo);
        }
        $emplete->delete();
        return redirect()->route('empletes.index')
            ->with('success', 'Emplete deleted successfully');
    }

    public function getAllempletes()
    {
        $empletes = Emplete::all();
        return response()->json($empletes);
    }
}
