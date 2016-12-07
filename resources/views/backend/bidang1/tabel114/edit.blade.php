@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Tawaran Penulisan Buku, Animo, dan Finalisasi Penulisannnya
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel114.index') }}">tabel1.14</a></li>
          <li class="active">Edit tabel1.14</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel114, [
                  'method' => 'PUT',
                  'route'  => ['tabel114.update', $tabel114->id],
                  'files'  => TRUE,
                  'id' => 'tabel114-form'
              ]) !!}

              @include('backend.bidang1.tabel114.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel114.script')
