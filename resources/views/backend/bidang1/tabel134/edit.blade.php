@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Jumlah Usulan Proposal dan Kontrak Penelitian Menurut Skim Penelitian Berdasarkan Dana Eksternal
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel134.index') }}">tabel1.34</a></li>
          <li class="active">Edit tabel1.34</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel134, [
                  'method' => 'PUT',
                  'route'  => ['tabel134.update', $tabel134->id],
                  'files'  => TRUE,
                  'id' => 'tabel134-form'
              ]) !!}

              @include('backend.bidang1.tabel134.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel134.script')
