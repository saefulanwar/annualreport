@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         Kegiatan guest lecturing
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel44.index') }}">tabel4.4</a></li>
          <li class="active">Edit tabel4.4</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel44, [
                  'method' => 'PUT',
                  'route'  => ['tabel44.update', $tabel44->id],
                  'files'  => TRUE,
                  'id' => 'tabel44-form'
              ]) !!}

              @include('backend.bidang4.tabel44.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang4.tabel44.script')
