@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         Anggaran Pendapatan DIPA UNY
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel225.index') }}">tabel2.1</a></li>
          <li class="active">Edit tabel2.25</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel225, [
                  'method' => 'PUT',
                  'route'  => ['tabel225.update', $tabel225->id],
                  'files'  => TRUE,
                  'id' => 'tabel225-form'
              ]) !!}

              @include('backend.bidang2.tabel225.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang2.tabel225.script')
