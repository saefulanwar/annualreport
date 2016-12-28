<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Dayatampung;
use Auth;
use Excel;

class DayatampungController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dayatampung = Dayatampung::latest()->orderBy('tahun','asc')->paginate(15);
        $dayatampungCount = Dayatampung::count();
        return view('backend.bidang1.dayatampung.index', compact('dayatampung','dayatampungCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Dayatampung $dayatampung)
    {
        return view('backend.bidang1.dayatampung.create', compact('dayatampung'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Dayatampung::create($request->all());

        return redirect('/backend/dayatampung')->with('message', 'Your data was created successfully!');
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
        $dayatampung = Dayatampung::findOrFail($id);
        return view("backend.bidang1.dayatampung.edit", compact('dayatampung'));
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
        $dayatampung = Dayatampung::findOrFail($id);
        $dayatampung->update($request->all());
        return redirect('/backend/dayatampung')->with('message', 'Your dayatampung was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dayatampung::findOrFail($id)->delete();

        return redirect('/backend/dayatampung')->with('error-message', 'Your dayatampung was deleted');
    }

    public function export()
    {
    return view('backend.bidang1.dayatampung.export');
    }

    public function exportPostData(Request $request)
    {
    // validasi
    $this->validate($request, [
    'tahun'=>'required',
    ], [
    'tahun.required'=>'Anda belum memilih tahun. Pilih minimal 1 tahun.'
    ]);
    $datas = Dayatampung::whereIn('id', $request->get('tahun'))->get();
    Excel::create('Data Daya Tampung', function($excel) use ($datas) {
    // Set property
    $excel->setTitle('Data Daya Tampung')
    ->setCreator(Auth::user()->name);
    $excel->sheet('Data Daya Tampung', function($sheet) use ($datas) {
    $row = 1;
    $sheet->row($row, [
    'Tahun',
    'D3,S1',
    'S2',
    'S3'
    ]);
    foreach ($datas as $data) {
    $sheet->row(++$row, [
    $data->tahun,
    $data->s1,
    $data->s2,
    $data->s3
    ]);
    }
    });
    })->export('xls');
    }
}
