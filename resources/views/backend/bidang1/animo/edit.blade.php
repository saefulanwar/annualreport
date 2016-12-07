@extends('backend.main')

@section('title', 'UNY REPORT | Edit Animo')

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
          <li><a href="{{ route('animo.index') }}">Animo</a></li>
          <li class="active">Edit Animo</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($animo, [
                  'method' => 'PUT',
                  'route'  => ['animo.update', $animo->id],
                  'files'  => TRUE,
                  'id' => 'animo-form'
              ]) !!}

              @include('backend.bidang1.animo.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.animo.script')
