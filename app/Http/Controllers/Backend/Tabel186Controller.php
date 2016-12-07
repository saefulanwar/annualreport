<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel186;

class Tabel186Controller extends BackendController
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel186 = Tabel186::latest()->paginate(15);
        $tabel186Count = Tabel186::count();
        return view('backend.bidang1.tabel186.index', compact('tabel186','tabel186Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel186 $tabel186)
    {
        return view('backend.bidang1.tabel186.create', compact('tabel186'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel186::create($request->all());

        return redirect('/backend/tabel186')->with('message', 'Your data was created successfully!');
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
        $tabel186 = Tabel186::findOrFail($id);
        return view("backend.bidang1.tabel186.edit", compact('tabel186'));
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
        $tabel186 = Tabel186::findOrFail($id);
        $tabel186->update($request->all());
        return redirect('/backend/tabel186')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel186::findOrFail($id)->delete();

        return redirect('/backend/tabel186')->with('error-message', 'Your data was deleted');
    }
}
