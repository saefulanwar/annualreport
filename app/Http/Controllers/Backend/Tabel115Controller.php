<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel115;

class Tabel115Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel115 = Tabel115::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel115Count = Tabel115::count();
        return view('backend.bidang1.tabel115.index', compact('tabel115','tabel115Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel115 $tabel115)
    {
        return view('backend.bidang1.tabel115.create', compact('tabel115'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel115::create($request->all());

        return redirect('/backend/tabel115')->with('message', 'Your data was created successfully!');
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
        $tabel115 = Tabel115::findOrFail($id);
        return view("backend.bidang1.tabel115.edit", compact('tabel115'));
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
        $tabel115 = Tabel115::findOrFail($id);
        $tabel115->update($request->all());
        return redirect('/backend/tabel115')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel115::findOrFail($id)->delete();

        return redirect('/backend/tabel115')->with('error-message', 'Your data was deleted');
    }
}
