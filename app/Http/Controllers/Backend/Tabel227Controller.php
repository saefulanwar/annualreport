<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang2\Tabel227;
class Tabel227Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel227 = Tabel227::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel227Count = Tabel227::count();
        return view('backend.bidang2.tabel227.index', compact('tabel227','tabel227Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel227 $tabel227)
    {
        return view('backend.bidang2.tabel227.create', compact('tabel227'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel227::create($request->all());

        return redirect('/backend/tabel227')->with('message', 'Your data was created successfully!');
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
        $tabel227 = Tabel227::findOrFail($id);
        return view("backend.bidang2.tabel227.edit", compact('tabel227'));
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
        $tabel227 = Tabel227::findOrFail($id);
        $tabel227->update($request->all());
        return redirect('/backend/tabel227')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel227::findOrFail($id)->delete();

        return redirect('/backend/tabel227')->with('error-message', 'Your data was deleted');
    }
}
