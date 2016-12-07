@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Jumlah Mahasiswa mencapai kelulusan ProTEFL
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel16.index') }}">tabel1.6</a></li>
          <li class="active">Edit tabel16</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel16, [
                  'method' => 'PUT',
                  'route'  => ['tabel16.update', $tabel16->id],
                  'files'  => TRUE,
                  'id' => 'tabel16-form'
              ]) !!}

              @include('backend.bidang1.tabel16.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel16.script')
