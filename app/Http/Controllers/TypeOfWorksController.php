<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeOfWorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeOfWork = TypeOfWorks::all();
        dd($typeOfWork);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:typeOfWorks|max:255',
        ]);
        $ad = TypeOfWorks::create($validated);
        return view('typeOfWorks.show', compact('typeOfWork')); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typeOfWork = TypeOfWork::findOrFail($id);
        return view('typeOfWorks.show', compact('typeOfWork'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typeOfWork = TypeOfWorks.findOrFail($id);
        return view('typeOfWorks.edit', compact('typeOfWork'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|unique:typeOfWork|max:255'
        ]);

        $typeOfWorks = TypeOfWorks.findOrFail($id);
        $typeOfWorks->fill($validated);
        $typeOfWorks->save();

        return view('typeOfWorks.show', compact('typeOfWorks'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
