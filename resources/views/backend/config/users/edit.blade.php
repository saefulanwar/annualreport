@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')
@include('backend.config.users.style')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         Users
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('user.index') }}">user</a></li>
          <li class="active">Edit user</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($user, [
                  'method' => 'PUT',
                  'route'  => ['user.update', $user->id],
                  'files'  => TRUE,
                  'id' => 'user-form'
              ]) !!}

              @include('backend.config.users.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.config.users.script')
