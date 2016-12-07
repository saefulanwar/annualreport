@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
      Klaim Asuransi dan Dana Kesejahteraan Kesehatan Mahasiswa UNY
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel38.index') }}">tabel3.8</a></li>
          <li class="active">Edit tabel3.8</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel38, [
                  'method' => 'PUT',
                  'route'  => ['tabel38.update', $tabel38->id],
                  'files'  => TRUE,
                  'id' => 'tabel38-form'
              ]) !!}

              @include('backend.bidang3.tabel38.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang3.tabel38.script')
