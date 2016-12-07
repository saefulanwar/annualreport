@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         Kegiatan Pengembangan Wawasan Internasional Mahasiswa
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel42.index') }}">tabel4.2</a></li>
          <li class="active">Edit tabel4.2</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel42, [
                  'method' => 'PUT',
                  'route'  => ['tabel42.update', $tabel42->id],
                  'files'  => TRUE,
                  'id' => 'tabel42-form'
              ]) !!}

              @include('backend.bidang3.tabel42.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang3.tabel42.script')
