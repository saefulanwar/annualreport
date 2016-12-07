<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang2\Tabel23;
class Tabel23Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel23 = Tabel23::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel23Count = Tabel23::count();
        return view('backend.bidang2.tabel23.index', compact('tabel23','tabel23Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel23 $tabel23)
    {
        return view('backend.bidang2.tabel23.create', compact('tabel23'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel23::create($request->all());

        return redirect('/backend/tabel23')->with('message', 'Your data was created successfully!');
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
        $tabel23 = Tabel23::findOrFail($id);
        return view("backend.bidang2.tabel23.edit", compact('tabel23'));
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
        $tabel23 = Tabel23::findOrFail($id);
        $tabel23->update($request->all());
        return redirect('/backend/tabel23')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel23::findOrFail($id)->delete();

        return redirect('/backend/tabel23')->with('error-message', 'Your data was deleted');
    }
}
