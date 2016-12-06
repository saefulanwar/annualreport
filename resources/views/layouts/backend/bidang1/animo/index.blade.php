@extends('layouts.backend.main')

@section('title','Laporan Universitas | Animo List')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Animo
        <small>Display all animo</small>
      </h1>
      <ol class="breadcrumb">
        <li>
        <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
        <a href="{{ route('animo.index') }}"> Animo</a>
        </li>
        <li class="active">
        Display all animo
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
                <a href="{{ route('animo.create') }}" class="btn btn-success"> Add New</a>
              </div>   
            </div>        
              <!-- /.box-header -->
              <div class="box-body ">
               @if(! $animo->count())
                <div class="alert alert-danger">
                  <strong>No record found</strong>
                </div>
                @else
                   <table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</td>
                         <th>D3,S1</th>
                         <th>S2</th>
                         <th>S3</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($animo as $data)
                      <tr>
                         <td>
                           <a href="{{ route('blog.edit', $data->id) }}" class="btn btn-xs btn-default">
                             <i class="fa fa-edit"></i>
                           </a>
                           <a href="{{ route('blog.destroy', $data->id) }}" class="btn btn-xs btn-danger">
                             <i class="fa fa-times"></i>
                           </a>
                         </td>
                         <td>{{ $data->tahun }}</td>
                         <td>{{ $data->s1 }}</td>
                         <td>{{ $data->s2 }}</td>
                         <td>{{ $data->s3 }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>
                   @endif
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                <div class="pull-left">
                    {{ $animo->links() }}
                </div>
                <div class="pull-right">
                    <small>{{ $animoCount }}{{ str_plural(' Item', $animoCount) }}</small>
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

