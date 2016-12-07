@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         Kegiatan pre-departure training
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel46.index') }}">tabel3.2</a></li>
          <li class="active">Edit tabel4.6</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel46, [
                  'method' => 'PUT',
                  'route'  => ['tabel46.update', $tabel46->id],
                  'files'  => TRUE,
                  'id' => 'tabel46-form'
              ]) !!}

              @include('backend.bidang4.tabel46.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang4.tabel46.script')
