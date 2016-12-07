<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel15;

class Tabel15Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel15 = Tabel15::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel15Count = Tabel15::count();
        return view('backend.bidang1.tabel15.index', compact('tabel15','tabel15Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel15 $tabel15)
    {
        return view('backend.bidang1.tabel15.create', compact('tabel15'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        tabel15::create($request->all());

        return redirect('/backend/tabel15')->with('message', 'Your data was created successfully!');
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
        $tabel15 = Tabel15::findOrFail($id);
        return view("backend.bidang1.tabel15.edit", compact('tabel15'));
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
        $tabel15 = Tabel15::findOrFail($id);
        $tabel15->update($request->all());
        return redirect('/backend/tabel15')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel15::findOrFail($id)->delete();

        return redirect('/backend/tabel15')->with('error-message', 'Your data was deleted');
    }
}
