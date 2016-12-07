@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         Layanan P3 K dari UPT LK UNY
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel190.index') }}">tabel1.90</a></li>
          <li class="active">Edit tabel1.90</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel190, [
                  'method' => 'PUT',
                  'route'  => ['tabel190.update', $tabel190->id],
                  'files'  => TRUE,
                  'id' => 'tabel190-form'
              ]) !!}

              @include('backend.bidang1.tabel190.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel190.script')
