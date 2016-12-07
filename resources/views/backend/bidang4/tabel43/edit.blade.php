@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         Kegiatan dalam Rangka Internasionalisasi Prodi
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel43.index') }}">tabel4.3</a></li>
          <li class="active">Edit tabel4.3</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel43, [
                  'method' => 'PUT',
                  'route'  => ['tabel43.update', $tabel43->id],
                  'files'  => TRUE,
                  'id' => 'tabel43-form'
              ]) !!}

              @include('backend.bidang4.tabel43.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang4.tabel43.script')
