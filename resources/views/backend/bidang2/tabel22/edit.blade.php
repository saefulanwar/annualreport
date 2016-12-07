@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         Data Siswa Prakerin
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel22.index') }}">tabel2.2</a></li>
          <li class="active">Edit tabel2.2</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel22, [
                  'method' => 'PUT',
                  'route'  => ['tabel22.update', $tabel22->id],
                  'files'  => TRUE,
                  'id' => 'tabel22-form'
              ]) !!}

              @include('backend.bidang2.tabel22.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang2.tabel22.script')
