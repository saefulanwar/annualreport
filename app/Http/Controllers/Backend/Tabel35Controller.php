<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang3\Tabel35;

class Tabel35Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel35 = Tabel35::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel35Count = Tabel35::count();
        return view('backend.bidang3.tabel35.index', compact('tabel35','tabel35Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel35 $tabel35)
    {
        return view('backend.bidang3.tabel35.create', compact('tabel35'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel35::create($request->all());

        return redirect('/backend/tabel35')->with('message', 'Your data was created successfully!');
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
        $tabel35 = Tabel35::findOrFail($id);
        return view("backend.bidang3.tabel35.edit", compact('tabel35'));
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
        $tabel35 = Tabel35::findOrFail($id);
        $tabel35->update($request->all());
        return redirect('/backend/tabel35')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel35::findOrFail($id)->delete();

        return redirect('/backend/tabel35')->with('error-message', 'Your data was deleted');
    }
}
