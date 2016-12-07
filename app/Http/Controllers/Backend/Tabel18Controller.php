<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel18;

class Tabel18Controller extends BackendController
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel18 = Tabel18::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel18Count = Tabel18::count();
        return view('backend.bidang1.tabel18.index', compact('tabel18','tabel18Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel18 $tabel18)
    {
        return view('backend.bidang1.tabel18.create', compact('tabel18'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel18::create($request->all());

        return redirect('/backend/tabel18')->with('message', 'Your data was created successfully!');
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
        $tabel18 = Tabel18::findOrFail($id);
        return view("backend.bidang1.tabel18.edit", compact('tabel18'));
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
        $tabel18 = Tabel18::findOrFail($id);
        $tabel18->update($request->all());
        return redirect('/backend/tabel18')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel18::findOrFail($id)->delete();

        return redirect('/backend/tabel18')->with('error-message', 'Your data was deleted');
    }
}
