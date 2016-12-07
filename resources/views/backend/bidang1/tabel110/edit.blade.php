@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Data Dosen UNY Menurut Kualifikasi Akademik
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel110.index') }}">tabel1.10</a></li>
          <li class="active">Edit tabel110</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel110, [
                  'method' => 'PUT',
                  'route'  => ['tabel110.update', $tabel110->id],
                  'files'  => TRUE,
                  'id' => 'tabel110-form'
              ]) !!}

              @include('backend.bidang1.tabel110.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel110.script')
