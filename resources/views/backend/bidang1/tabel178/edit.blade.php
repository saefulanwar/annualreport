@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Perkembangan Jumlah Koleksi Buku Perpustakaan UNY Menurut Subyek Berbahasa Indonesia
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel178.index') }}">tabel1.78</a></li>
          <li class="active">Edit tabel1.78</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel178, [
                  'method' => 'PUT',
                  'route'  => ['tabel178.update', $tabel178->id],
                  'files'  => TRUE,
                  'id' => 'tabel178-form'
              ]) !!}

              @include('backend.bidang1.tabel178.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel178.script')
