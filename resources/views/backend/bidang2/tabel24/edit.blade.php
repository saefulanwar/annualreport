@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         Total Pengadaan Jasa Konstruksi
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel24.index') }}">tabel2.4</a></li>
          <li class="active">Edit tabel2.4</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel24, [
                  'method' => 'PUT',
                  'route'  => ['tabel24.update', $tabel24->id],
                  'files'  => TRUE,
                  'id' => 'tabel24-form'
              ]) !!}

              @include('backend.bidang2.tabel24.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang2.tabel24.script')
