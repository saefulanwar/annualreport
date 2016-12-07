<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel120;

class Tabel120Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel120 = Tabel120::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel120Count = Tabel120::count();
        return view('backend.bidang1.tabel120.index', compact('tabel120','tabel120Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel120 $tabel120)
    {
        return view('backend.bidang1.tabel120.create', compact('tabel120'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel120::create($request->all());

        return redirect('/backend/tabel120')->with('message', 'Your data was created successfully!');
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
        $tabel120 = Tabel120::findOrFail($id);
        return view("backend.bidang1.tabel120.edit", compact('tabel120'));
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
        $tabel120 = Tabel120::findOrFail($id);
        $tabel120->update($request->all());
        return redirect('/backend/tabel120')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel120::findOrFail($id)->delete();

        return redirect('/backend/tabel120')->with('error-message', 'Your data was deleted');
    }
}
