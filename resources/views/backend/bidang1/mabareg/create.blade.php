@extends('backend.main')

@section('title','Laporan Universitas | Add new mhs baru registrasi')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        mabareg
        <small>Add new</small>
      </h1>
      <ol class="breadcrumb">
        <li>
        <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
        <a href="{{ route('mabareg.index') }}"> mhs baru registrasi</a>
        </li>
        <li class="active">
        Add new
        </li>
      </ol>
    </section>

    <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($mabareg, [
                  'method' => 'POST',
                  'route'  => 'mabareg.store',
                  'files'  => TRUE,
                  'id' => 'mabareg-form'
              ]) !!}

              @include('backend.bidang1.mabareg.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.mabareg.script')

