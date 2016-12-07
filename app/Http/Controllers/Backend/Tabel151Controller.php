<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel151;

class Tabel151Controller extends BackendController
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel151 = Tabel151::latest()->paginate(15);
        $tabel151Count = Tabel151::count();
        return view('backend.bidang1.tabel151.index', compact('tabel151','tabel151Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel151 $tabel151)
    {
        return view('backend.bidang1.tabel151.create', compact('tabel151'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        tabel151::create($request->all());

        return redirect('/backend/tabel151')->with('message', 'Your data was created successfully!');
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
        $tabel151 = Tabel151::findOrFail($id);
        return view("backend.bidang1.tabel151.edit", compact('tabel151'));
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
        $tabel151 = Tabel151::findOrFail($id);
        $tabel151->update($request->all());
        return redirect('/backend/tabel151')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel151::findOrFail($id)->delete();

        return redirect('/backend/tabel151')->with('error-message', 'Your data was deleted');
    }
}
