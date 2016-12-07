<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang4\Tabel42;

class Tabel42Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel42 = Tabel42::latest()->paginate(15);
        $tabel42Count = Tabel42::count();
        return view('backend.bidang4.tabel42.index', compact('tabel42','tabel42Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel42 $tabel42)
    {
        return view('backend.bidang4.tabel42.create', compact('tabel42'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel42::create($request->all());

        return redirect('/backend/tabel42')->with('message', 'Your data was created successfully!');
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
        $tabel42 = Tabel42::findOrFail($id);
        return view("backend.bidang4.tabel42.edit", compact('tabel42'));
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
        $tabel42 = Tabel42::findOrFail($id);
        $tabel42->update($request->all());
        return redirect('/backend/tabel42')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel42::findOrFail($id)->delete();

        return redirect('/backend/tabel42')->with('error-message', 'Your data was deleted');
    }
}
