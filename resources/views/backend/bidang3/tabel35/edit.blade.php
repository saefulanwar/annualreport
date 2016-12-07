@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         Pengadaan Jasa Konstruksi
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel25.index') }}">tabel2.5</a></li>
          <li class="active">Edit tabel2.5</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel25, [
                  'method' => 'PUT',
                  'route'  => ['tabel25.update', $tabel25->id],
                  'files'  => TRUE,
                  'id' => 'tabel25-form'
              ]) !!}

              @include('backend.bidang2.tabel25.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang2.tabel25.script')
