<?php

namespace App\Http\Controllers;

use App\Models\Bimsdato;
use Illuminate\Http\Request;

/**
 * Class BimsdatoController
 * @package App\Http\Controllers
 */
class BimsdatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bimsdatos = Bimsdato::paginate();

        return view('bimsdato.index', compact('bimsdatos'))
            ->with('i', (request()->input('page', 1) - 1) * $bimsdatos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bimsdato = new Bimsdato();
        return view('bimsdato.create', compact('bimsdato'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Bimsdato::$rules);

        $bimsdato = Bimsdato::create($request->all());

        return redirect()->route('bimsdatos.index')
            ->with('success', 'Bimsdato created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bimsdato = Bimsdato::find($id);

        return view('bimsdato.show', compact('bimsdato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bimsdato = Bimsdato::find($id);

        return view('bimsdato.edit', compact('bimsdato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Bimsdato $bimsdato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bimsdato $bimsdato)
    {
        request()->validate(Bimsdato::$rules);

        $bimsdato->update($request->all());

        return redirect()->route('bimsdatos.index')
            ->with('success', 'Bimsdato updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $bimsdato = Bimsdato::find($id)->delete();

        return redirect()->route('bimsdatos.index')
            ->with('success', 'Bimsdato deleted successfully');
    }

    public function getAllbimsdatos()
    {
        $bimsdato = Bimsdato::all();
        return response()->json($bimsdato);
    }
}
