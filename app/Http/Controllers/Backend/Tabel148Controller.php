<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel148;

class Tabel148Controller extends BackendController
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel148 = Tabel148::latest()->paginate(15);
        $tabel148Count = Tabel148::count();
        return view('backend.bidang1.tabel148.index', compact('tabel148','tabel148Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel148 $tabel148)
    {
        return view('backend.bidang1.tabel148.create', compact('tabel148'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel148::create($request->all());

        return redirect('/backend/tabel148')->with('message', 'Your data was created successfully!');
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
        $tabel148 = Tabel148::findOrFail($id);
        return view("backend.bidang1.tabel148.edit", compact('tabel148'));
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
        $tabel148 = Tabel148::findOrFail($id);
        $tabel148->update($request->all());
        return redirect('/backend/tabel148')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel148::findOrFail($id)->delete();

        return redirect('/backend/tabel148')->with('error-message', 'Your data was deleted');
    }
}
