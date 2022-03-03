<?php

namespace App\Http\Controllers;

use App\Models\Formacione;
use Illuminate\Http\Request;

/**
 * Class FormacioneController
 * @package App\Http\Controllers
 */
class FormacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formaciones = Formacione::paginate();

        return view('formacione.index', compact('formaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $formaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formacione = new Formacione();
        return view('formacione.create', compact('formacione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Formacione::$rules);

        $formacione = Formacione::create($request->all());

        return redirect()->route('formaciones.index')
            ->with('success', 'Formacione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formacione = Formacione::find($id);

        return view('formacione.show', compact('formacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formacione = Formacione::find($id);

        return view('formacione.edit', compact('formacione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Formacione $formacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formacione $formacione)
    {
        request()->validate(Formacione::$rules);

        $formacione->update($request->all());

        return redirect()->route('formaciones.index')
            ->with('success', 'Formacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $formacione = Formacione::find($id)->delete();

        return redirect()->route('formaciones.index')
            ->with('success', 'Formacione deleted successfully');
    }
}
