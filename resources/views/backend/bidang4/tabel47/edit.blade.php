@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         MoU Kerjasama Luar Negeri
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel47.index') }}">tabel4.7</a></li>
          <li class="active">Edit tabel4.7</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel47, [
                  'method' => 'PUT',
                  'route'  => ['tabel47.update', $tabel47->id],
                  'files'  => TRUE,
                  'id' => 'tabel47-form'
              ]) !!}

              @include('backend.bidang4.tabel47.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang4.tabel47.script')
