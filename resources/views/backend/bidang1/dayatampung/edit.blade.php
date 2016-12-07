@extends('backend.main')

@section('title', 'UNY REPORT | Edit Dayatampung')

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
          <li><a href="{{ route('dayatampung.index') }}">dayatampung</a></li>
          <li class="active">Edit dayatampung</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($dayatampung, [
                  'method' => 'PUT',
                  'route'  => ['dayatampung.update', $dayatampung->id],
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
