<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel144;
class Tabel144Controller extends BackendController
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel144 = Tabel144::latest()->paginate(15);
        $tabel144Count = Tabel144::count();
        return view('backend.bidang1.tabel144.index', compact('tabel144','tabel144Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel144 $tabel144)
    {
        return view('backend.bidang1.tabel144.create', compact('tabel144'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel144::create($request->all());

        return redirect('/backend/tabel144')->with('message', 'Your data was created successfully!');
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
        $tabel144 = tabel144::findOrFail($id);
        return view("backend.bidang1.tabel144.edit", compact('tabel144'));
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
        $tabel144 = Tabel144::findOrFail($id);
        $tabel144->update($request->all());
        return redirect('/backend/tabel144')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel144::findOrFail($id)->delete();

        return redirect('/backend/tabel144')->with('error-message', 'Your data was deleted');
    }
}
