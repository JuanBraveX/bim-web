<?php

namespace App\Http\Controllers;

use App\Models\Carrusele;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class CarruseleController
 * @package App\Http\Controllers
 */
class CarruseleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carruseles = Carrusele::paginate();

        return view('carrusele.index', compact('carruseles'))
            ->with('i', (request()->input('page', 1) - 1) * $carruseles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carrusele = new Carrusele();
        return view('carrusele.create', compact('carrusele'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Carrusele::$rules);
        $datosFooter = new Carrusele;
        if ($request->hasFile('img')) {
            $nombreArchivoOriginal = $request->file('img')->getClientOriginalName();
            $nuevoNombre = Carbon::now()->timestamp . "_carrusele" . "_" . $nombreArchivoOriginal;
            $carpetaDestino = './carrusele/';
            $request->file('img')->move($carpetaDestino, $nuevoNombre);
            $datosFooter->img = ltrim($carpetaDestino, '.') . $nuevoNombre;
            $datosFooter->save();
        }

        return redirect()->route('carruseles.index')
            ->with('success', 'Carrusele created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carrusele = Carrusele::find($id);

        return view('carrusele.show', compact('carrusele'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carrusele = Carrusele::find($id);

        return view('carrusele.edit', compact('carrusele'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Carrusele $carrusele
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrusele $carrusele)
    {
        request()->validate(Carrusele::$rules);
        if ($request->hasFile('img')) {
            if (Storage::disk('public')->exists($carrusele->img)) {
                Storage::disk('public')->delete($carrusele->img);
            }
        }

        if ($request->hasFile('img')) {
            $rutaArchivo = public_path($carrusele->img);

            if (file_exists($rutaArchivo)) {
                unlink($rutaArchivo);
            }

            $nombreArchivoOriginal = $request->file('img')->getClientOriginalName();
            $nuevoNombre = Carbon::now()->timestamp . "_carrusele" . $nombreArchivoOriginal;
            $carpetaDestino = './carrusele/';

            $request->file('img')->move($carpetaDestino, $nuevoNombre);
            $carrusele->img = ltrim($carpetaDestino, '.') . $nuevoNombre;
        }

        $carrusele->save();
        return redirect()->route('carruseles.index')
            ->with('success', 'Carrusele updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $carrusele = Carrusele::find($id);
        $rutaArchivo = public_path($carrusele->img);

        if (file_exists($rutaArchivo)) {
            unlink($rutaArchivo);
        }
        $carrusele->delete();
        return redirect()->route('carruseles.index')
            ->with('success', 'Carrusele deleted successfully');
    }
}
