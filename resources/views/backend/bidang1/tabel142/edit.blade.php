@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Jumlah Kontrak PPM yang dilaksanakan Fakultas dan Pascasarjana
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel142.index') }}">tabel1.42</a></li>
          <li class="active">Edit tabel1.42</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel142, [
                  'method' => 'PUT',
                  'route'  => ['tabel142.update', $tabel142->id],
                  'files'  => TRUE,
                  'id' => 'tabel142-form'
              ]) !!}

              @include('backend.bidang1.tabel142.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel142.script')
