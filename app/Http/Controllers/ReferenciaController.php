<?php

namespace App\Http\Controllers;

use App\Models\Referencia;
use Illuminate\Http\Request;

/**
 * Class ReferenciaController
 * @package App\Http\Controllers
 */
class ReferenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $referencias = Referencia::paginate();

        return view('referencia.index', compact('referencias'))
            ->with('i', (request()->input('page', 1) - 1) * $referencias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $referencia = new Referencia();
        return view('referencia.create', compact('referencia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Referencia::$rules);

        $referencia = Referencia::create($request->all());

        return redirect()->route('referencias.index')
            ->with('success', 'Referencia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $referencia = Referencia::find($id);

        return view('referencia.show', compact('referencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $referencia = Referencia::find($id);

        return view('referencia.edit', compact('referencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Referencia $referencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Referencia $referencia)
    {
        request()->validate(Referencia::$rules);

        $referencia->update($request->all());

        return redirect()->route('referencias.index')
            ->with('success', 'Referencia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $referencia = Referencia::find($id)->delete();

        return redirect()->route('referencias.index')
            ->with('success', 'Referencia deleted successfully');
    }
}
