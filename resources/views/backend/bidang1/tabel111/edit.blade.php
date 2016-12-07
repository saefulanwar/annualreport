@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Data Dosen UNY Sedang Studi lanjut
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel111.index') }}">tabel1.11</a></li>
          <li class="active">Edit tabel1.11</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel111, [
                  'method' => 'PUT',
                  'route'  => ['tabel111.update', $tabel111->id],
                  'files'  => TRUE,
                  'id' => 'tabel111-form'
              ]) !!}

              @include('backend.bidang1.tabel111.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel111.script')
