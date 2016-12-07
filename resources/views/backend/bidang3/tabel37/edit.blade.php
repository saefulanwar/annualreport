@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
        Rincian Data Mahasiswa UNY Penerima Beasiswa

          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel37.index') }}">tabel3.7</a></li>
          <li class="active">Edit tabel3.7</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel37, [
                  'method' => 'PUT',
                  'route'  => ['tabel37.update', $tabel37->id],
                  'files'  => TRUE,
                  'id' => 'tabel37-form'
              ]) !!}

              @include('backend.bidang3.tabel37.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang3.tabel37.script')
