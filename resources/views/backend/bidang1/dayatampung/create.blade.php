@extends('backend.main')

@section('title','UNY REPORT | Add new dayatampung')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dayatampung
        <small>Add new</small>
      </h1>
      <ol class="breadcrumb">
        <li>
        <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
        <a href="{{ route('dayatampung.index') }}"> Dayatampung</a>
        </li>
        <li class="active">
        Add new
        </li>
      </ol>
    </section>

    <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($dayatampung, [
                  'method' => 'POST',
                  'route'  => 'dayatampung.store',
                  'files'  => TRUE,
                  'id' => 'dayatampung-form'
              ]) !!}

              @include('backend.bidang1.dayatampung.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.dayatampung.script')

