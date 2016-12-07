<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Maba;

class MabaController extends BackendController
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maba = Maba::latest()->orderBy('tahun','asc')->paginate(15);
        $mabaCount = Maba::count();
        return view('backend.bidang1.maba.index', compact('maba','mabaCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Maba $maba)
    {
        return view('backend.bidang1.maba.create', compact('maba'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Maba::create($request->all());

        return redirect('/backend/maba')->with('message', 'Your data was created successfully!');
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
        $maba = Maba::findOrFail($id);
        return view("backend.bidang1.maba.edit", compact('maba'));
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
        $maba = Maba::findOrFail($id);
        $maba->update($request->all());
        return redirect('/backend/maba')->with('message', 'Your maba was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Maba::findOrFail($id)->delete();

        return redirect('/backend/maba')->with('error-message', 'Your maba was deleted');
    }
}
