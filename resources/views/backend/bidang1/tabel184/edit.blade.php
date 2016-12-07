@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Data Permintaan Tambahan Domain dan Hosting
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel184.index') }}">tabel1.84</a></li>
          <li class="active">Edit tabel1.84</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel184, [
                  'method' => 'PUT',
                  'route'  => ['tabel184.update', $tabel184->id],
                  'files'  => TRUE,
                  'id' => 'tabel184-form'
              ]) !!}

              @include('backend.bidang1.tabel184.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel184.script')
