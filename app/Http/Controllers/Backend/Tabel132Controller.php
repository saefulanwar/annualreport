<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel132;

class Tabel132Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel132 = Tabel132::latest()->paginate(15);
        $tabel132Count = Tabel132::count();
        return view('backend.bidang1.tabel132.index', compact('tabel132','tabel132Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel132 $tabel132)
    {
        return view('backend.bidang1.tabel132.create', compact('tabel132'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel132::create($request->all());

        return redirect('/backend/tabel132')->with('message', 'Your data was created successfully!');
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
        $tabel132 = Tabel132::findOrFail($id);
        return view("backend.bidang1.tabel132.edit", compact('tabel132'));
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
        $tabel132 = Tabel132::findOrFail($id);
        $tabel132->update($request->all());
        return redirect('/backend/tabel132')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel132::findOrFail($id)->delete();

        return redirect('/backend/tabel132')->with('error-message', 'Your data was deleted');
    }
}
