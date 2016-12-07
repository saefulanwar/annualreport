<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang4\Tabel44;
class Tabel44Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel44 = Tabel44::latest()->paginate(15);
        $tabel44Count = Tabel44::count();
        return view('backend.bidang4.tabel44.index', compact('tabel44','tabel44Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel44 $tabel44)
    {
        return view('backend.bidang4.tabel44.create', compact('tabel44'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel44::create($request->all());

        return redirect('/backend/tabel44')->with('message', 'Your data was created successfully!');
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
        $tabel44 = Tabel44::findOrFail($id);
        return view("backend.bidang4.tabel44.edit", compact('tabel44'));
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
        $tabel44 = Tabel44::findOrFail($id);
        $tabel44->update($request->all());
        return redirect('/backend/tabel44')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel44::findOrFail($id)->delete();

        return redirect('/backend/tabel44')->with('error-message', 'Your data was deleted');
    }
}
