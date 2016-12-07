@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Lama Studi Mahasiswa UNY dalam Delapan Tahun Terakhir

          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel19.index') }}">tabel1.9</a></li>
          <li class="active">Edit tabel19</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel19, [
                  'method' => 'PUT',
                  'route'  => ['tabel19.update', $tabel19->id],
                  'files'  => TRUE,
                  'id' => 'tabel19-form'
              ]) !!}

              @include('backend.bidang1.tabel19.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel19.script')
