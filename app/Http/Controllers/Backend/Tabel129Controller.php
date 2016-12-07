<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel129;

class Tabel129Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel129 = Tabel129::latest()->orderBy('waktu','asc')->paginate(15);
        $tabel129Count = Tabel129::count();
        return view('backend.bidang1.tabel129.index', compact('tabel129','tabel129Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel129 $tabel129)
    {
        return view('backend.bidang1.tabel129.create', compact('tabel129'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel129::create($request->all());

        return redirect('/backend/tabel129')->with('message', 'Your data was created successfully!');
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
        $tabel129 = Tabel129::findOrFail($id);
        return view("backend.bidang1.tabel129.edit", compact('tabel129'));
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
        $tabel129 = Tabel129::findOrFail($id);
        $tabel129->update($request->all());
        return redirect('/backend/tabel129')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel129::findOrFail($id)->delete();

        return redirect('/backend/tabel129')->with('error-message', 'Your data was deleted');
    }
}
