<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel169;

class Tabel169Controller extends BackendController
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel169 = Tabel169::latest()->paginate(15);
        $tabel169Count = Tabel169::count();
        return view('backend.bidang1.tabel169.index', compact('tabel169','tabel169Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel169 $tabel169)
    {
        return view('backend.bidang1.tabel169.create', compact('tabel169'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel169::create($request->all());

        return redirect('/backend/tabel169')->with('message', 'Your data was created successfully!');
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
        $tabel169 = Tabel169::findOrFail($id);
        return view("backend.bidang1.tabel169.edit", compact('tabel169'));
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
        $tabel169 = Tabel169::findOrFail($id);
        $tabel169->update($request->all());
        return redirect('/backend/tabel169')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel169::findOrFail($id)->delete();

        return redirect('/backend/tabel169')->with('error-message', 'Your data was deleted');
    }
}
