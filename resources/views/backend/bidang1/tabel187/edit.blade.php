@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         Jumlah Pasien dan Besar Dana Terkumpul
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel187.index') }}">tabel1.87</a></li>
          <li class="active">Edit tabel1.87</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel187, [
                  'method' => 'PUT',
                  'route'  => ['tabel187.update', $tabel187->id],
                  'files'  => TRUE,
                  'id' => 'tabel187-form'
              ]) !!}

              @include('backend.bidang1.tabel187.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel187.script')
