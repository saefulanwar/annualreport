@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         Mahasiswa Berprestasi Tingkat UNY
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel35.index') }}">tabel3.5</a></li>
          <li class="active">Edit tabel3.5</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel35, [
                  'method' => 'PUT',
                  'route'  => ['tabel35.update', $tabel35->id],
                  'files'  => TRUE,
                  'id' => 'tabel35-form'
              ]) !!}

              @include('backend.bidang3.tabel35.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang3.tabel35.script')
