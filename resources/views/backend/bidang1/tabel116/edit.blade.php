@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Data Dosen yang Telah dan Belum Lulus Sertifikasi

          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel116.index') }}">tabel1.16</a></li>
          <li class="active">Edit tabel1.16</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel116, [
                  'method' => 'PUT',
                  'route'  => ['tabel116.update', $tabel116->id],
                  'files'  => TRUE,
                  'id' => 'tabel116-form'
              ]) !!}

              @include('backend.bidang1.tabel116.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel116.script')
