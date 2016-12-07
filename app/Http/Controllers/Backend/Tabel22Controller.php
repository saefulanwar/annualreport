<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang2\Tabel22;
class Tabel22Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel22 = Tabel22::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel22Count = Tabel22::count();
        return view('backend.bidang2.tabel22.index', compact('tabel22','tabel22Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel22 $tabel22)
    {
        return view('backend.bidang2.tabel22.create', compact('tabel22'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel22::create($request->all());

        return redirect('/backend/tabel22')->with('message', 'Your data was created successfully!');
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
        $tabel22 = Tabel22::findOrFail($id);
        return view("backend.bidang2.tabel22.edit", compact('tabel22'));
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
        $tabel22 = Tabel22::findOrFail($id);
        $tabel22->update($request->all());
        return redirect('/backend/tabel22')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel22::findOrFail($id)->delete();

        return redirect('/backend/tabel22')->with('error-message', 'Your data was deleted');
    }
}
