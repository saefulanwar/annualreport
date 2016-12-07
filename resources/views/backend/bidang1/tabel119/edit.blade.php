@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Jumlah Dosen yang Difasilitasi untuk Menulis Jurnal Artikel Terindeks
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel119.index') }}">tabel1.19</a></li>
          <li class="active">Edit tabel1.19</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel119, [
                  'method' => 'PUT',
                  'route'  => ['tabel119.update', $tabel119->id],
                  'files'  => TRUE,
                  'id' => 'tabel119-form'
              ]) !!}

              @include('backend.bidang1.tabel119.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel119.script')
