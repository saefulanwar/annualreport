@extends('backend.main')

@section('title','UNY REPORT | Dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <!-- /.box-header -->
              <div class="box-body ">
                    <h3>Welcome {{ Auth::user()->name }}</h3>
                    <p class="lead text-muted">Hallo {{ Auth::user()->name }}, Silahkan pilih navigasi dibawah</p>

                    <h4>Get started</h4>
                    <p><a href="#" class="btn btn-primary">Navigasi</a> </p>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

