@extends('backend.main')

@section('title','UNY REPORT | Add new data')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        Anggaran Pendapatan DIPA UNY
        <small>Add new</small>
      </h1>
      <ol class="breadcrumb">
        <li>
        <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
        <a href="{{ route('tabel225.index') }}"> tabel2.25</a>
        </li>
        <li class="active">
        Add new
        </li>
      </ol>
    </section>

    <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel225, [
                  'method' => 'POST',
                  'route'  => 'tabel225.store',
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

