@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Jumlah Sertifikat Penelitian
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel135.index') }}">tabel1.35</a></li>
          <li class="active">Edit tabel1.35</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel135, [
                  'method' => 'PUT',
                  'route'  => ['tabel135.update', $tabel135->id],
                  'files'  => TRUE,
                  'id' => 'tabel135-form'
              ]) !!}

              @include('backend.bidang1.tabel135.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel135.script')
