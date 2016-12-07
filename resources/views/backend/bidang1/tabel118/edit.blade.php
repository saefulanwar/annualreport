@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Jumlah Guru Besar Baru
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel118.index') }}">tabel1.18</a></li>
          <li class="active">Edit tabel1.18</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel118, [
                  'method' => 'PUT',
                  'route'  => ['tabel118.update', $tabel118->id],
                  'files'  => TRUE,
                  'id' => 'tabel118-form'
              ]) !!}

              @include('backend.bidang1.tabel118.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel118.script')
