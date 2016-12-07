@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Pelatihan dan Workshop di LPPMP (P2KIS)
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel151.index') }}">tabel1.51</a></li>
          <li class="active">Edit tabel1.51</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel151, [
                  'method' => 'PUT',
                  'route'  => ['tabel151.update', $tabel151->id],
                  'files'  => TRUE,
                  'id' => 'tabel151-form'
              ]) !!}

              @include('backend.bidang1.tabel151.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel151.script')
