@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Acara Seminar Nasional atau Internasional
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel129.index') }}">tabel1.29</a></li>
          <li class="active">Edit tabel1.29</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel129, [
                  'method' => 'PUT',
                  'route'  => ['tabel129.update', $tabel129->id],
                  'files'  => TRUE,
                  'id' => 'tabel129-form'
              ]) !!}

              @include('backend.bidang1.tabel129.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel129.script')
