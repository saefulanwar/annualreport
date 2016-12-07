@extends('backend.main')

@section('title','Laporan Universitas | Mahasiswa Aktif List')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        mhsaktif
        <small>Display all mhs aktif</small>
      </h1>
      <ol class="breadcrumb">
        <li>
        <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
        <a href="{{ route('mhsaktif.index') }}"> mhs aktif</a>
        </li>
        <li class="active">
        Display all daya tampung
        </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box"> 
            <div class="box-header">
              <div class="pull-left">
                <a href="{{ route('mhsaktif.create') }}" class="btn btn-success"><i class="fa fa-pencil"></i> Add New</a>
              </div>   
            </div>        
              <!-- /.box-header -->
              <div class="box-body ">
               @include('backend.partials.message')

                    @if (! $mhsaktif->count())
                        <div class="alert alert-danger">
                            <strong>No record found</strong>
                        </div>
                    @else                       
                        @include('backend.bidang1.mhsaktif.table')
                    @endif
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                <div class="pull-left">
                    {{ $mhsaktif->links() }}
                </div>
                <div class="pull-right">
                    <small>{{ $mhsaktifCount }}{{ str_plural(' Item', $mhsaktifCount) }}</small>
                </div>
              </div>
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

@section('script')
    <script type="text/javascript">
        $('ul.pagination').addClass('no-margin pagination-sm');
    </script>
@endsection

