@extends('backend.main')

@section('title', 'MyBlog | Edit mhs aktif ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Animo
          <small>Edit animo</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('mhsaktif.index') }}">mhs aktif</a></li>
          <li class="active">Edit mhsaktif</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($mhsaktif, [
                  'method' => 'PUT',
                  'route'  => ['mhsaktif.update', $mhsaktif->id],
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
