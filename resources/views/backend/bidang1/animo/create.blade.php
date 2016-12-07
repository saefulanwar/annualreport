@extends('backend.main')

@section('title','UNY REPORT | Add new animo')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Animo
        <small>Add new</small>
      </h1>
      <ol class="breadcrumb">
        <li>
        <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
        <a href="{{ route('animo.index') }}"> Animo</a>
        </li>
        <li class="active">
        Add new
        </li>
      </ol>
    </section>

    <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($animo, [
                  'method' => 'POST',
                  'route'  => 'animo.store',
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

