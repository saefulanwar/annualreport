<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel184;

class Tabel184Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel184 = tabel184::latest()->paginate(15);
        $tabel184Count = tabel184::count();
        return view('backend.bidang1.tabel184.index', compact('tabel184','tabel184Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(tabel184 $tabel184)
    {
        return view('backend.bidang1.tabel184.create', compact('tabel184'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        tabel184::create($request->all());

        return redirect('/backend/tabel184')->with('message', 'Your data was created successfully!');
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
        $tabel184 = tabel184::findOrFail($id);
        return view("backend.bidang1.tabel184.edit", compact('tabel184'));
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
        $tabel184 = tabel184::findOrFail($id);
        $tabel184->update($request->all());
        return redirect('/backend/tabel184')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tabel184::findOrFail($id)->delete();

        return redirect('/backend/tabel184')->with('error-message', 'Your data was deleted');
    }
}
