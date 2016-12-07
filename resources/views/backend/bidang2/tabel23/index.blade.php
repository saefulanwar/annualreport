@extends('backend.main')

@section('title','UNY REPORT | List data')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
      Balik Nama Akta Tanah 
        <small>Display all data</small>
      </h1>
      <ol class="breadcrumb">
        <li>
        <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
        <a href="{{ route('tabel23.index') }}"> tabel2.3</a>
        </li>
        <li class="active">
        Display all data
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
                <a href="{{ route('tabel23.create') }}" class="btn btn-success"><i class="fa fa-pencil"></i> Add New</a>
              </div>   
            </div>        
              <!-- /.box-header -->
              <div class="box-body ">
               @include('backend.partials.message')

                    @if (! $tabel23->count())
                        <div class="alert alert-danger">
                            <strong>No record found</strong>
                        </div>
                    @else                       
                        @include('backend.bidang2.tabel23.table')
                    @endif
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                <div class="pull-left">
                    {{ $tabel225->links() }}
                </div>
                <div class="pull-right">
                    <small>{{ $tabel23Count }}{{ str_plural(' Item', $tabel23Count) }}</small>
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

