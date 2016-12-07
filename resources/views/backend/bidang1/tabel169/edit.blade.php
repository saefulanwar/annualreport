@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Perkembangan Jumlah Keseluruhan Koleksi Buku Perpustakaan UNY Menurut Subyek
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel169.index') }}">tabel1.69</a></li>
          <li class="active">Edit tabel1.69</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel169, [
                  'method' => 'PUT',
                  'route'  => ['tabel169.update', $tabel169->id],
                  'files'  => TRUE,
                  'id' => 'tabel169-form'
              ]) !!}

              @include('backend.bidang1.tabel169.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel169.script')
