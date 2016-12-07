@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         Sepuluh Besar Perguruan Tinggi Peraih Juara Kompetisi Bidang Penalaran Mahasiswa
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel34.index') }}">tabel3.4</a></li>
          <li class="active">Edit tabel3.4</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel34, [
                  'method' => 'PUT',
                  'route'  => ['tabel34.update', $tabel34->id],
                  'files'  => TRUE,
                  'id' => 'tabel34-form'
              ]) !!}

              @include('backend.bidang3.tabel34.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang3.tabel34.script')
