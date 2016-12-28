<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel171;

class Tabel171Controller extends BackendController
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel171 = Tabel171::latest()->paginate(15);
        $tabel171Count = Tabel171::count();
        return view('backend.bidang1.tabel171.index', compact('tabel171','tabel171Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel171 $tabel171)
    {
        return view('backend.bidang1.tabel171.create', compact('tabel171'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel171::create($request->all());

        return redirect('/backend/tabel171')->with('message', 'Your data was created successfully!');
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
        $tabel171 = Tabel171::findOrFail($id);
        return view("backend.bidang1.tabel171.edit", compact('tabel171'));
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
        $tabel171 = Tabel171::findOrFail($id);
        $tabel171->update($request->all());
        return redirect('/backend/tabel171')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel171::findOrFail($id)->delete();

        return redirect('/backend/tabel171')->with('error-message', 'Your data was deleted');
    }
}
