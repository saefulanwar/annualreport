@extends('backend.main')

@section('title','UNY REPORT | Add new data')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        Rincian Proposal PKM yang Didanai Ditjen Dikti Berdasarkan Jenis PKM dan Asal Fakultas
        <small>Add new</small>
      </h1>
      <ol class="breadcrumb">
        <li>
        <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
        <a href="{{ route('tabel33.index') }}"> tabel3.3</a>
        </li>
        <li class="active">
        Add new
        </li>
      </ol>
    </section>

    <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel33, [
                  'method' => 'POST',
                  'route'  => 'tabel33.store',
                  'files'  => TRUE,
                  'id' => 'tabel33-form'
              ]) !!}

              @include('backend.bidang3.tabel33.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang3.tabel33.script')

