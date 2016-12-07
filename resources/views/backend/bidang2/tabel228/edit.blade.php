@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         Laporan Pendapatan BPPU
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel228.index') }}">tabel2.28</a></li>
          <li class="active">Edit tabel2.28</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel228, [
                  'method' => 'PUT',
                  'route'  => ['tabel228.update', $tabel228->id],
                  'files'  => TRUE,
                  'id' => 'tabel228-form'
              ]) !!}

              @include('backend.bidang2.tabel228.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang2.tabel228.script')
