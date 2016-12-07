@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Daftar Usulan HKI 
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel147.index') }}">tabel1.47</a></li>
          <li class="active">Edit tabel1.47</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel147, [
                  'method' => 'PUT',
                  'route'  => ['tabel147.update', $tabel147->id],
                  'files'  => TRUE,
                  'id' => 'tabel147-form'
              ]) !!}

              @include('backend.bidang1.tabel147.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel147.script')
