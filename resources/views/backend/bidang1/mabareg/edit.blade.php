@extends('backend.main')

@section('title', 'MyBlog | Edit mhs baru registrasi')

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
          <li><a href="{{ route('mabareg.index') }}">mhs baru registrasi</a></li>
          <li class="active">Edit mhs baru registrasi</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($mabareg, [
                  'method' => 'PUT',
                  'route'  => ['mabareg.update', $mabareg->id],
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
