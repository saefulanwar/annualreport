@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Jumlah Guru Besar UNY yang Aktif
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel117.index') }}">tabel1.17</a></li>
          <li class="active">Edit tabel1.17</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel117, [
                  'method' => 'PUT',
                  'route'  => ['tabel117.update', $tabel117->id],
                  'files'  => TRUE,
                  'id' => 'tabel117-form'
              ]) !!}

              @include('backend.bidang1.tabel117.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel117.script')
