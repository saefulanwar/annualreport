@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         Pengadaan Jasa Non Konstruksi
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel214.index') }}">tabel2.14</a></li>
          <li class="active">Edit tabel2.14</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel214, [
                  'method' => 'PUT',
                  'route'  => ['tabel214.update', $tabel214->id],
                  'files'  => TRUE,
                  'id' => 'tabel214-form'
              ]) !!}

              @include('backend.bidang2.tabel214.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang2.tabel214.script')
