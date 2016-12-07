@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Jumlah Dosen yang Melaksanakan PPM
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel141.index') }}">tabel1.41</a></li>
          <li class="active">Edit tabel1.41</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel141, [
                  'method' => 'PUT',
                  'route'  => ['tabel141.update', $tabel141->id],
                  'files'  => TRUE,
                  'id' => 'tabel141-form'
              ]) !!}

              @include('backend.bidang1.tabel141.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel141.script')
