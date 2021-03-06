@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         Balik Nama Akta Tanah
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel23.index') }}">tabel2.3</a></li>
          <li class="active">Edit tabel2.3</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel23, [
                  'method' => 'PUT',
                  'route'  => ['tabel23.update', $tabel23->id],
                  'files'  => TRUE,
                  'id' => 'tabel23-form'
              ]) !!}

              @include('backend.bidang2.tabel23.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang2.tabel23.script')
