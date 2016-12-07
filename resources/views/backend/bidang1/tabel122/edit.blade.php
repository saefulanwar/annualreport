@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Data Rekapitulasi Pelatihan Luar Negeri Non Gelar
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel122.index') }}">tabel1.22</a></li>
          <li class="active">Edit tabel1.22</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel122, [
                  'method' => 'PUT',
                  'route'  => ['tabel122.update', $tabel122->id],
                  'files'  => TRUE,
                  'id' => 'tabel122-form'
              ]) !!}

              @include('backend.bidang1.tabel122.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel122.script')
