<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel137;

class Tabel137Controller extends BackendController
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel137 = Tabel137::latest()->paginate(15);
        $tabel137Count = Tabel137::count();
        return view('backend.bidang1.tabel137.index', compact('tabel137','tabel137Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel137 $tabel137)
    {
        return view('backend.bidang1.tabel137.create', compact('tabel137'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel137::create($request->all());

        return redirect('/backend/tabel137')->with('message', 'Your data was created successfully!');
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
        $tabel137 = Tabel137::findOrFail($id);
        return view("backend.bidang1.tabel137.edit", compact('tabel137'));
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
        $tabel137 = Tabel137::findOrFail($id);
        $tabel137->update($request->all());
        return redirect('/backend/tabel137')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel137::findOrFail($id)->delete();

        return redirect('/backend/tabel137')->with('error-message', 'Your data was deleted');
    }
}
