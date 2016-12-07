@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Daftar Advokasi LKBH yang Telah Terlaksana
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel185.index') }}">tabel1.85</a></li>
          <li class="active">Edit tabel1.85</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel185, [
                  'method' => 'PUT',
                  'route'  => ['tabel185.update', $tabel185->id],
                  'files'  => TRUE,
                  'id' => 'tabel185-form'
              ]) !!}

              @include('backend.bidang1.tabel185.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel185.script')
