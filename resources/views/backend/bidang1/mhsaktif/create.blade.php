@extends('backend.main')

@section('title','Laporan Universitas | Add new mhs aktif')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        mhsaktif
        <small>Add new</small>
      </h1>
      <ol class="breadcrumb">
        <li>
        <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
        <a href="{{ route('mhsaktif.index') }}"> mhs aktif</a>
        </li>
        <li class="active">
        Add new
        </li>
      </ol>
    </section>

    <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($mhsaktif, [
                  'method' => 'POST',
                  'route'  => 'mhsaktif.store',
                  'files'  => TRUE,
                  'id' => 'mhsaktif-form'
              ]) !!}

              @include('backend.bidang1.mhsaktif.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.mhsaktif.script')

