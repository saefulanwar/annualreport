@extends('backend.main')

@section('title','Laporan Universitas | Export dayatampung')

@section('content')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Daya Tampung
          <small>Export Daya Tampung</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('dayatampung.index') }}">dayatampung</a></li>
          <li class="active">Export dayatampung</li>
        </ol>
      </section>

    <!-- Main content -->
    <section class="content">
    	<div class="row">
          <div class="col-xs-12">
            <div class="box">        
              <!-- /.box-header -->
              <div class="box-body ">

    	{!! Form::open(['url' => url('/backend/exportdytampung'),
		'method' => 'post', 'class'=>'form-horizontal']) !!}
		<div class="form-group {!! $errors->has('tahun') ? 'has-error' : '' !!}">
		{!! Form::label('tahun', 'Pilih Tahun', ['class'=>'col-md-2 control-label']) !!}
		<div class="col-md-4">
		{!! Form::select('tahun[]', [''=>'']+App\Bidang1\Dayatampung::pluck('tahun','id')->all(),\
		null, [
		'class'=>'js-selectize',
		'multiple',
		'placeholder' => 'Pilih Tahun']) !!}
		{!! $errors->first('tahun', '<p class="help-block">:message</p>') !!}
		</div>
		</div>
		<div class="form-group">
		<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Download', ['class'=>'btn btn-primary']) !!}
		</div>
		</div>
		{!! Form::close() !!}
		</div>
		</div>
		</div>
		</div>

      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('script')
<script src="{{ asset('/backend/js/custom.js') }}"></script>
@endsection

