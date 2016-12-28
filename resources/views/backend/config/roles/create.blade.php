@extends('backend.main')

@section('title','UNY REPORT | Add new data')
@include('backend.config.roles.style')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        Roles User
        <small>Add new</small>
      </h1>
      <ol class="breadcrumb">
        <li>
        <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
        <a href="{{ route('role.index') }}"> role</a>
        </li>
        <li class="active">
        Add new
        </li>
      </ol>
    </section>

    <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($role, [
                  'method' => 'POST',
                  'route'  => 'role.store',
                  'files'  => TRUE,
                  'id' => 'role-form'
              ]) !!}

              @include('backend.config.roles.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.config.roles.script')

