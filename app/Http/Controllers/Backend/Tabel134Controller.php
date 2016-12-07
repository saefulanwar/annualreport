<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel134;

class Tabel134Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel134 = Tabel134::latest()->paginate(15);
        $tabel134Count = Tabel134::count();
        return view('backend.bidang1.tabel134.index', compact('tabel134','tabel134Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel134 $tabel134)
    {
        return view('backend.bidang1.tabel134.create', compact('tabel134'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel134::create($request->all());

        return redirect('/backend/tabel134')->with('message', 'Your data was created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tabel134 = Tabel134::findOrFail($id);
        return view("backend.bidang1.tabel134.edit", compact('tabel134'));
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
        $tabel134 = Tabel134::findOrFail($id);
        $tabel134->update($request->all());
        return redirect('/backend/tabel134')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel134::findOrFail($id)->delete();

        return redirect('/backend/tabel134')->with('error-message', 'Your data was deleted');
    }
}
