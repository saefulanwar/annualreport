@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Jumlah Dosen yang Lulus Sertifikasi dan Kuotanya
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel115.index') }}">tabel1.15</a></li>
          <li class="active">Edit tabel1.15</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel115, [
                  'method' => 'PUT',
                  'route'  => ['tabel115.update', $tabel115->id],
                  'files'  => TRUE,
                  'id' => 'tabel115-form'
              ]) !!}

              @include('backend.bidang1.tabel115.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel115.script')
