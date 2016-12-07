@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Rekapitulasi Penelitian Menurut Skim
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel132.index') }}">tabel1.32</a></li>
          <li class="active">Edit tabel1.32</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel132, [
                  'method' => 'PUT',
                  'route'  => ['tabel132.update', $tabel132->id],
                  'files'  => TRUE,
                  'id' => 'tabel132-form'
              ]) !!}

              @include('backend.bidang1.tabel132.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel132.script')
