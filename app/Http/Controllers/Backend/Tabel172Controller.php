<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel172;
class Tabel172Controller extends BackendController
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel172 = Tabel172::latest()->paginate(15);
        $tabel172Count = Tabel172::count();
        return view('backend.bidang1.tabel172.index', compact('tabel172','tabel172Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel172 $tabel172)
    {
        return view('backend.bidang1.tabel172.create', compact('tabel172'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel172::create($request->all());

        return redirect('/backend/tabel172')->with('message', 'Your data was created successfully!');
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
        $tabel172 = Tabel172::findOrFail($id);
        return view("backend.bidang1.tabel172.edit", compact('tabel172'));
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
        $tabel172 = Tabel172::findOrFail($id);
        $tabel172->update($request->all());
        return redirect('/backend/tabel172')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel172::findOrFail($id)->delete();

        return redirect('/backend/tabel172')->with('error-message', 'Your data was deleted');
    }
}
