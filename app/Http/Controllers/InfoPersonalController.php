<?php

namespace App\Http\Controllers;

use App\Models\InfoPersonal;
use Illuminate\Http\Request;

/**
 * Class InfoPersonalController
 * @package App\Http\Controllers
 */
class InfoPersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infoPersonals = InfoPersonal::paginate();

        return view('info-personal.index', compact('infoPersonals'))
            ->with('i', (request()->input('page', 1) - 1) * $infoPersonals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $infoPersonal = new InfoPersonal();
        return view('info-personal.create', compact('infoPersonal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(InfoPersonal::$rules);

        $infoPersonal = InfoPersonal::create($request->all());

        return redirect()->route('info-personals.index')
            ->with('success', 'InfoPersonal created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $infoPersonal = InfoPersonal::find($id);

        return view('info-personal.show', compact('infoPersonal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $infoPersonal = InfoPersonal::find($id);

        return view('info-personal.edit', compact('infoPersonal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  InfoPersonal $infoPersonal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InfoPersonal $infoPersonal)
    {
        request()->validate(InfoPersonal::$rules);

        $infoPersonal->update($request->all());

        return redirect()->route('info-personals.index')
            ->with('success', 'InfoPersonal updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $infoPersonal = InfoPersonal::find($id)->delete();

        return redirect()->route('info-personals.index')
            ->with('success', 'InfoPersonal deleted successfully');
    }
}
