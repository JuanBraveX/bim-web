<?php

namespace App\Http\Controllers;

use App\Models\Contactano;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/**
 * Class ContactanoController
 * @package App\Http\Controllers
 */
class ContactanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactanos = Contactano::paginate();

        return view('contactano.index', compact('contactanos'))
            ->with('i', (request()->input('page', 1) - 1) * $contactanos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contactano = new Contactano();
        return view('contactano.create', compact('contactano'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Contactano::$rules);

        $contactano = Contactano::create($request->all());
        $destinatario = 'info@binmotion.com.mx';
        Mail::send('mails.contactano', [
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'empresa' => $request->empresa,
            'puesto' => $request->puesto,
            'mensaje' => $request->mensaje,
        ], function ($message) use ($destinatario) {
            $message->to($destinatario)
                ->subject('Nuevo Prospecto');
        });

        return redirect()->route('contactanos.index')
            ->with('success', 'Contactano created successfully.');
    }

    public function storeP(Request $request)
    {
        request()->validate(Contactano::$rules);

        $contactano = Contactano::create($request->all());
        $destinatario = 'info@binmotion.com.mx';
        Mail::send('mails.contactano', [
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'empresa' => $request->empresa,
            'puesto' => $request->puesto,
            'mensaje' => $request->mensaje,
        ], function ($message) use ($destinatario) {
            $message->to($destinatario)
                ->subject('Nuevo Prospecto');
        });

        return redirect()->route('contacto')
            ->with('success', 'Nos contactaremos en la brevedad');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contactano = Contactano::find($id);

        return view('contactano.show', compact('contactano'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contactano = Contactano::find($id);

        return view('contactano.edit', compact('contactano'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Contactano $contactano
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contactano $contactano)
    {
        request()->validate(Contactano::$rules);

        $contactano->update($request->all());

        return redirect()->route('contactanos.index')
            ->with('success', 'Contactano updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $contactano = Contactano::find($id)->delete();

        return redirect()->route('contactanos.index')
            ->with('success', 'Contactano deleted successfully');
    }

    public function getAllcontactanos()
    {
        $contactanos = Contactano::all();
        return response()->json($contactanos);
    }
}
