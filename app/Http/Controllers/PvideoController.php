<?php

namespace App\Http\Controllers;

use App\Models\Pvideo;
use Illuminate\Http\Request;

/**
 * Class PvideoController
 * @package App\Http\Controllers
 */
class PvideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pvideos = Pvideo::paginate();

        return view('pvideo.index', compact('pvideos'))
            ->with('i', (request()->input('page', 1) - 1) * $pvideos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pvideo = new Pvideo();
        return view('pvideo.create', compact('pvideo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pvideo::$rules);

        $pvideo = Pvideo::create($request->all());

        return redirect()->route('pvideos.index')
            ->with('success', 'Pvideo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pvideo = Pvideo::find($id);

        return view('pvideo.show', compact('pvideo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pvideo = Pvideo::find($id);

        return view('pvideo.edit', compact('pvideo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pvideo $pvideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pvideo $pvideo)
    {
        request()->validate(Pvideo::$rules);

        $pvideo->update($request->all());

        return redirect()->route('pvideos.index')
            ->with('success', 'Pvideo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pvideo = Pvideo::find($id)->delete();

        return redirect()->route('pvideos.index')
            ->with('success', 'Pvideo deleted successfully');
    }

    public function getAllpvideos()
    {
        $pvideos = Pvideo::all();
        return response()->json($pvideos);
    }
}
