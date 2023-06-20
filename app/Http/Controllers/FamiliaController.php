<?php

namespace App\Http\Controllers;

use App\Models\Familia;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class FamiliaController
 * @package App\Http\Controllers
 */
class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $familias = Familia::paginate();

        return view('familia.index', compact('familias'))
            ->with('i', (request()->input('page', 1) - 1) * $familias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $familia = new Familia();
        return view('familia.create', compact('familia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Familia::$rules);

        $familiaData = $request->except('img'); // Obtener los datos del formulario excepto la imagen

        if ($request->hasFile('img')) {
            $nombreArchivoOriginal = $request->file('img')->getClientOriginalName();
            $nuevoNombre = Carbon::now()->timestamp . "_familia" . "_" . $nombreArchivoOriginal;
            $carpetaDestino = './familia/';

            $request->file('img')->move($carpetaDestino, $nuevoNombre);
            $familiaData['img'] = ltrim($carpetaDestino, '.') . $nuevoNombre; // Asignar la ruta de la imagen al campo 'img' del modelo familia
        }
        $familia = Familia::create($familiaData);
        return redirect()->route('familias.index')
            ->with('success', 'Familia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $familia = Familia::find($id);

        return view('familia.show', compact('familia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $familia = Familia::find($id);

        return view('familia.edit', compact('familia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Familia $familia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Familia $familia)
    {
        request()->validate(Familia::$rules);
        $familia->update($request->all());
        if ($request->hasFile('img')) {
            if (Storage::disk('public')->exists($familia->img)) {
                Storage::disk('public')->delete($familia->img);
            }
        }
        if ($request->hasFile('img')) {
            $rutaArchivo = public_path($familia->img);

            if (file_exists($rutaArchivo)) {
                unlink($rutaArchivo);
            }

            $nombreArchivoOriginal = $request->file('img')->getClientOriginalName();
            $nuevoNombre = Carbon::now()->timestamp . "_familia" . $nombreArchivoOriginal;
            $carpetaDestino = './familia/';

            $request->file('img')->move($carpetaDestino, $nuevoNombre);
            $familia->img = ltrim($carpetaDestino, '.') . $nuevoNombre;
        }

        $familia->save();

        return redirect()->route('familias.index')
            ->with('success', 'Familia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $familia = Familia::find($id);
        $rutaArchivo = public_path($familia->img);

        if (file_exists($rutaArchivo)) {
            unlink($rutaArchivo);
        }

        $familia->delete();

        return redirect()->route('familias.index')
            ->with('success', 'Familia deleted successfully');
    }

    public function getAllfamilias()
    {
        $familias = Familia::all();
        return response()->json($familias);
    }
}
