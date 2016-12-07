@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Daftar Penerima HKI
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel148.index') }}">tabel1.48</a></li>
          <li class="active">Edit tabel1.48</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel148, [
                  'method' => 'PUT',
                  'route'  => ['tabel148.update', $tabel148->id],
                  'files'  => TRUE,
                  'id' => 'tabel148-form'
              ]) !!}

              @include('backend.bidang1.tabel148.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel148.script')
