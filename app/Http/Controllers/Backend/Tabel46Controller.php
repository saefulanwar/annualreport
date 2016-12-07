<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang4\Tabel46;
class Tabel46Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel46 = Tabel46::latest()->paginate(15);
        $tabel46Count = Tabel46::count();
        return view('backend.bidang4.tabel46.index', compact('tabel46','tabel46Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel46 $tabel46)
    {
        return view('backend.bidang4.tabel46.create', compact('tabel46'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel46::create($request->all());

        return redirect('/backend/tabel46')->with('message', 'Your data was created successfully!');
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
        $tabel46 = Tabel46::findOrFail($id);
        return view("backend.bidang4.tabel46.edit", compact('tabel46'));
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
        $tabel46 = Tabel46::findOrFail($id);
        $tabel46->update($request->all());
        return redirect('/backend/tabel46')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel46::findOrFail($id)->delete();

        return redirect('/backend/tabel46')->with('error-message', 'Your data was deleted');
    }
}
