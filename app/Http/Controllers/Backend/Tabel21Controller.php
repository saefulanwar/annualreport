<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang2\Tabel21;
class Tabel21Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel21 = Tabel21::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel21Count = Tabel21::count();
        return view('backend.bidang2.tabel21.index', compact('tabel21','tabel21Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel21 $tabel21)
    {
        return view('backend.bidang2.tabel21.create', compact('tabel21'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel21::create($request->all());

        return redirect('/backend/tabel21')->with('message', 'Your data was created successfully!');
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
        $tabel21 = Tabel21::findOrFail($id);
        return view("backend.bidang2.tabel21.edit", compact('tabel21'));
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
        $tabel21 = Tabel21::findOrFail($id);
        $tabel21->update($request->all());
        return redirect('/backend/tabel21')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel21::findOrFail($id)->delete();

        return redirect('/backend/tabel21')->with('error-message', 'Your data was deleted');
    }
}
