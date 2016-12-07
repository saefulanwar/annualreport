<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel190;

class Tabel190Controller extends BackendController
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel190 = Tabel190::latest()->paginate(15);
        $tabel190Count = Tabel190::count();
        return view('backend.bidang1.tabel190.index', compact('tabel190','tabel190Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel190 $tabel190)
    {
        return view('backend.bidang1.tabel190.create', compact('tabel190'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel190::create($request->all());

        return redirect('/backend/tabel190')->with('message', 'Your data was created successfully!');
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
        $tabel190 = Tabel190::findOrFail($id);
        return view("backend.bidang1.tabel190.edit", compact('tabel190'));
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
        $tabel190 = Tabel190::findOrFail($id);
        $tabel190->update($request->all());
        return redirect('/backend/tabel190')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel190::findOrFail($id)->delete();

        return redirect('/backend/tabel190')->with('error-message', 'Your data was deleted');
    }
}
