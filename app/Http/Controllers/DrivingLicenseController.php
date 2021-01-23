<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrivingLicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivingLicense = DrivingLicense::all();
        dd($drivingLicense);
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
            'name' => 'required|unique:drivingLicense|max:255',
        ]);
        $ad = DrivingLicense::create($validated);
        return view('drivingLicenses.show', compact('drivingLicense')); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $drivingLicense = DrivingLicense::findOrFail($id);
        return view('drivingLicenses.show', compact('drivingLicense'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $drivingLicense = DrivingLicense.findOrFail($id);
        return view('drivingLicenses.edit', compact('drivingLicense'));
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
            'name' => 'required|unique:drivingLicense|max:255'
        ]);

        $drivingLicenses = DrivingLicenses.findOrFail($id);
        $drivingLicenses->fill($validated);
        $drivingLicenses->save();

        return view('drivingLicenses.show', compact('drivingLicenses'));
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
