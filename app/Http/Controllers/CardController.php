<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class CardController
 * @package App\Http\Controllers
 */
class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Card::paginate();

        return view('card.index', compact('cards'))
            ->with('i', (request()->input('page', 1) - 1) * $cards->perPage());
    }

    public function indexG($tipo)
    {
        $cards = Card::where('tipo', $tipo)->get();
        return response()->json($cards);
    }

    public function indexP($tipo)
    {
        $cards = Card::where('tipo', $tipo)->paginate();

        return view('card.index', compact('cards'))
            ->with('i', (request()->input('page', 1) - 1) * $cards->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $card = new Card();
        return view('card.create', compact('card'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Card::$rules);

        //$card = Card::create($request->all());
        $datosFooter = new Card;

        //$cbima = Cbima::create($request->all());
        if ($request->hasFile('img')) {

            $nombreArchivoOriginal = $request->file('img')->getClientOriginalName();
            $nuevoNombre = Carbon::now()->timestamp . "_card_" . $request->tipo . $nombreArchivoOriginal;
            $carpetaDestino = './card/';

            $request->file('img')->move($carpetaDestino, $nuevoNombre);

            $datosFooter->titulo = $request->titulo;
            $datosFooter->img = ltrim($carpetaDestino, '.') . $nuevoNombre;
            $datosFooter->descripcion = $request->descripcion;
            $datosFooter->link = $request->link;
            $datosFooter->tipo = $request->tipo;

            $datosFooter->save();
        }

        return redirect()->route('cards.indexP', $request->tipo)->with('success', 'Card created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $card = Card::find($id);

        return view('card.show', compact('card'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $card = Card::find($id);

        return view('card.edit', compact('card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Card $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        request()->validate(Card::$rules);
        if ($request->hasFile('img')) {
            if (Storage::disk('public')->exists($card->img)) {
                Storage::disk('public')->delete($card->img);
            }
        }

        $card->titulo = $request->titulo;
        $card->descripcion = $request->descripcion;
        $card->link = $request->link;
        $card->tipo = $request->tipo;

        if ($request->hasFile('img')) {
            $rutaArchivo = public_path($card->img);

            if (file_exists($rutaArchivo)) {
                unlink($rutaArchivo);
            }

            $nombreArchivoOriginal = $request->file('img')->getClientOriginalName();
            $nuevoNombre = Carbon::now()->timestamp . "_card_" . $request->tipo . $nombreArchivoOriginal;
            $carpetaDestino = './card/';

            $request->file('img')->move($carpetaDestino, $nuevoNombre);
            $card->img = ltrim($carpetaDestino, '.') . $nuevoNombre;
        }

        $card->save();

        //$card->update($request->all());

        return redirect()->route('cards.indexP', $request->tipo)
            ->with('success', 'Card updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $card = Card::find($id);
        $rutaArchivo = public_path($card->img);
        $tipo = $card->tipo;
        if (file_exists($rutaArchivo)) {
            unlink($rutaArchivo);
        }
        $card->delete();


        return redirect()->route('cards.indexP', $tipo)
            ->with('success', 'Card deleted successfully');
    }
}
