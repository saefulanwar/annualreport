@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         Program Kerjasama UNY
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel227.index') }}">tabel2.27</a></li>
          <li class="active">Edit tabel2.27</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel227, [
                  'method' => 'PUT',
                  'route'  => ['tabel227.update', $tabel227->id],
                  'files'  => TRUE,
                  'id' => 'tabel227-form'
              ]) !!}

              @include('backend.bidang2.tabel227.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang2.tabel227.script')
