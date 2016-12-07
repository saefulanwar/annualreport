@extends('backend.main')

@section('title', 'UNY REPORT | Edit mahasiswa baru')

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
          <li><a href="{{ route('maba.index') }}">mahasiswa baru</a></li>
          <li class="active">Edit mahasiswa baru</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($maba, [
                  'method' => 'PUT',
                  'route'  => ['maba.update', $maba->id],
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
