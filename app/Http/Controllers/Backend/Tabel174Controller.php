<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel174;

class Tabel174Controller extends BackendController
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel174 = Tabel174::latest()->paginate(15);
        $tabel174Count = Tabel174::count();
        return view('backend.bidang1.tabel174.index', compact('tabel174','tabel174Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel174 $tabel174)
    {
        return view('backend.bidang1.tabel174.create', compact('tabel174'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel174::create($request->all());

        return redirect('/backend/tabel174')->with('message', 'Your data was created successfully!');
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
        $tabel174 = Tabel174::findOrFail($id);
        return view("backend.bidang1.tabel174.edit", compact('tabel174'));
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
        $tabel174 = Tabel174::findOrFail($id);
        $tabel174->update($request->all());
        return redirect('/backend/tabel174')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel174::findOrFail($id)->delete();

        return redirect('/backend/tabel174')->with('error-message', 'Your data was deleted');
    }
}
