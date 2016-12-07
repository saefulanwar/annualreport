<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel131;

class Tabel131Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel131 = Tabel131::latest()->paginate(15);
        $tabel131Count = Tabel131::count();
        return view('backend.bidang1.tabel131.index', compact('tabel131','tabel131Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel131 $tabel131)
    {
        return view('backend.bidang1.tabel131.create', compact('tabel131'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        tabel131::create($request->all());

        return redirect('/backend/tabel131')->with('message', 'Your data was created successfully!');
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
        $tabel131 = Tabel131::findOrFail($id);
        return view("backend.bidang1.tabel131.edit", compact('tabel131'));
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
        $tabel131 = Tabel131::findOrFail($id);
        $tabel131->update($request->all());
        return redirect('/backend/tabel131')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel131::findOrFail($id)->delete();

        return redirect('/backend/tabel131')->with('error-message', 'Your data was deleted');
    }
}
