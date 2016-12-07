<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel187;

class Tabel187Controller extends BackendController
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel187 = Tabel187::latest()->paginate(15);
        $tabel187Count = Tabel187::count();
        return view('backend.bidang1.tabel187.index', compact('tabel187','tabel187Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel187 $tabel187)
    {
        return view('backend.bidang1.tabel187.create', compact('tabel187'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel187::create($request->all());

        return redirect('/backend/tabel187')->with('message', 'Your data was created successfully!');
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
        $tabel187 = Tabel187::findOrFail($id);
        return view("backend.bidang1.tabel187.edit", compact('tabel187'));
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
        $tabel187 = Tabel187::findOrFail($id);
        $tabel187->update($request->all());
        return redirect('/backend/tabel187')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel187::findOrFail($id)->delete();

        return redirect('/backend/tabel187')->with('error-message', 'Your data was deleted');
    }
}
