<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel111;

class Tabel111Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel111 = Tabel111::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel111Count = Tabel111::count();
        return view('backend.bidang1.tabel111.index', compact('tabel111','tabel111Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel111 $tabel111)
    {
        return view('backend.bidang1.tabel111.create', compact('tabel111'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel111::create($request->all());

        return redirect('/backend/tabel111')->with('message', 'Your data was created successfully!');
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
        $tabel111 = Tabel111::findOrFail($id);
        return view("backend.bidang1.tabel111.edit", compact('tabel111'));
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
        $tabel111 = Tabel111::findOrFail($id);
        $tabel111->update($request->all());
        return redirect('/backend/tabel111')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel111::findOrFail($id)->delete();

        return redirect('/backend/tabel111')->with('error-message', 'Your data was deleted');
    }
}
