<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ad = Ads::all();
        return view('ads.index');
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
            'name' => 'required|unique:ads|max:255',
            'conditions' => 'required|unique:ads|max:255',
            'whatDoWeOffer' => 'required|unique:ads|max:255',
            'linkForApplication' => 'required|unique:ads|max:255',
            'description' => 'required|unique:ads|max:255',
            'category' => 'required|unique:ads|max:255'
        ]);
        $ad = Ads::create($validated);
        return view('ads.show', compact('ads')); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ad = Ads::findOrFail($id);
        return view('ads.show', compact('ads'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = Ads.findOrFail($id);
        return view('ads.edit', compact('ads'));
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
            'name' => 'required|unique:ads|max:255',
            'conditions' => 'required|unique:ads|max:255',
            'whatDoWeOffer' => 'required|unique:ads|max:255',
            'linkForApplication' => 'required|unique:ads|max:255',
            'description' => 'required|unique:ads|max:255',
            'category' => 'required|unique:ads|max:255'
        ]);

        $ads = Ads.findOrFail($id);
        $ads->fill($validated);
        $ads->save();

        return view('ads.show', compact('ads'));
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
