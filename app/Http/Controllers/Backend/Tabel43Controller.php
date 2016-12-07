<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang4\Tabel43;
class Tabel43Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel43 = Tabel43::latest()->paginate(15);
        $tabel43Count = Tabel43::count();
        return view('backend.bidang4.tabel43.index', compact('tabel43','tabel43Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel43 $tabel43)
    {
        return view('backend.bidang4.tabel43.create', compact('tabel43'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel43::create($request->all());

        return redirect('/backend/tabel43')->with('message', 'Your data was created successfully!');
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
        $tabel43 = Tabel43::findOrFail($id);
        return view("backend.bidang4.tabel43.edit", compact('tabel43'));
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
        $tabel43 = Tabel43::findOrFail($id);
        $tabel43->update($request->all());
        return redirect('/backend/tabel43')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel43::findOrFail($id)->delete();

        return redirect('/backend/tabel43')->with('error-message', 'Your data was deleted');
    }
}
