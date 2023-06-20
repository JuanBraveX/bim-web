<?php

namespace App\Http\Controllers;


use App\Models\{Bimsdato, Cbima, Cbimt, Cliente, Contactano, Empleadoo, Emplete, Familia, Personal, Personale, Pvideo};
use Illuminate\Http\Request;

class PaginaWebController extends Controller
{
    //
    public function index()
    {
        return view('pagina_web.index');
    }
    public function web()
    {
        // Lógica para la ruta '/web'
        return view('pagina_web.index');
    }

    public function bima()
    {
        // Lógica para la ruta '/bima'
        return view('pagina_web.index');
    }

    public function bims()
    {
        // Lógica para la ruta '/bims'
        return view('pagina_web.index');
    }

    public function conocenos()
    {
        // Lógica para la ruta '/conocenos'
        return view('pagina_web.index');
    }

    public function consultoria()
    {
        // Lógica para la ruta '/consultoria'
        return view('pagina_web.index');
    }

    public function contacto()
    {
        // Lógica para la ruta '/contacto'
        return view('pagina_web.index');
    }

    public function empleat()
    {
        // Lógica para la ruta '/empleat'
        return view('pagina_web.index');
    }

    public function marketing()
    {
        // Lógica para la ruta '/marketing'
        return view('pagina_web.index');
    }

    public function pvideografica()
    {
        // Lógica para la ruta '/pvideografica'
        return view('pagina_web.index');
    }

    public function qhacemos()
    {
        // Lógica para la ruta '/qhacemos'
        return view('pagina_web.index');
    }

    public function qofrecemos()
    {
        // Lógica para la ruta '/qofrecemos'
        return view('pagina_web.index');
    }

    public function qsomos()
    {
        // Lógica para la ruta '/qsomos'
        return view('pagina_web.index');
    }
}
