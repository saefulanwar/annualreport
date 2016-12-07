@extends('backend.main')

@section('title','UNY REPORT| Add new mahasiswa baru')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        maba
        <small>Add new</small>
      </h1>
      <ol class="breadcrumb">
        <li>
        <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
        <a href="{{ route('maba.index') }}"> mahasiswa baru</a>
        </li>
        <li class="active">
        Add new
        </li>
      </ol>
    </section>

    <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($maba, [
                  'method' => 'POST',
                  'route'  => 'maba.store',
                  'files'  => TRUE,
                  'id' => 'maba-form'
              ]) !!}

              @include('backend.bidang1.maba.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.maba.script')

