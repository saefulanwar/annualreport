<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel142;
class Tabel142Controller extends BackendController
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel142 = Tabel142::latest()->paginate(15);
        $tabel142Count = Tabel142::count();
        return view('backend.bidang1.tabel142.index', compact('tabel142','tabel142Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel142 $tabel142)
    {
        return view('backend.bidang1.tabel142.create', compact('tabel142'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel142::create($request->all());

        return redirect('/backend/tabel142')->with('message', 'Your data was created successfully!');
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
        $tabel142 = Tabel142::findOrFail($id);
        return view("backend.bidang1.tabel142.edit", compact('tabel142'));
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
        $tabel142 = Tabel142::findOrFail($id);
        $tabel142->update($request->all());
        return redirect('/backend/tabel142')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel142::findOrFail($id)->delete();

        return redirect('/backend/tabel142')->with('error-message', 'Your data was deleted');
    }
}
