@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         Realisasi Belanja DIPA UNY
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel226.index') }}">tabel2.26</a></li>
          <li class="active">Edit tabel2.26</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel226, [
                  'method' => 'PUT',
                  'route'  => ['tabel226.update', $tabel226->id],
                  'files'  => TRUE,
                  'id' => 'tabel226-form'
              ]) !!}

              @include('backend.bidang2.tabel226.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang2.tabel226.script')
