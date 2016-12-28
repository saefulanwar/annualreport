@extends('backend.main')

@section('title','UNY REPORT | List data')

@section('style')
<link rel="stylesheet" href="http://demo.expertphp.in/css/jquery.treeview.css" />
<link rel="stylesheet" href="{{ asset('/backend/css/custom.css') }}">
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
      Manajemen Menu
        <small>Display all data</small>
      </h1>
      <ol class="breadcrumb">
        <li>
        <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
        <a href="#"> navigation</a>
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
                <a href="{{ route('navigation-tree-view.create') }}" class="btn btn-success show-create-modal"><i class="fa fa-pencil"></i> Add New Menu</a>
              </div>   
            </div>        
              <!-- /.box-header -->
              <div class="box-body ">
                      <ul id="browser" class="filetree"><li class="tree-view"></li>
                             <li class="tree-view closed"><a class="tree-name">{{ $cat}}</a>
                             @if(count($child))
                              <ul>
                                <li class="tree-view closed"><a class="tree-name">{{ $child }} </a> 
                                @foreach($childs as $c)
                                <ul><li class="tree-view closed"><a class="tree-name">{{ $c->name }} </a></li></ul>
                                @endforeach                             
                              @else()
                                <li class="tree-view"><a class="tree-name">{{ $child2 }} </a></li>
                             @endif
                      </ul>
                      {{-- {!! $tree !!} --}}
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

    @include('backend.config.menus.menu-modal')

      <!!-- Edit Modal -->
    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Create New List</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="" class="control-label">Name</label>
              <input type="text" class="form-control input-lg">
            </div>
            <div class="form-group">
              <label class="control-label">Description</label>
              <textarea rows="2" class="form-control"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
@endsection

@section('script')
<script src="http://demo.expertphp.in/js/jquery-treeview.js"></script>
<script type="text/javascript" src="http://demo.expertphp.in/js/demo.js"></script>
    <script type="text/javascript">
    $('.show-create-modal').click(function(event){
      event.preventDefault();

      var url = $(this).attr('href');
      $.ajax({
        url:url,
        dataType:'html',
        success: function(response){
            $('#menus-body').html(response);
        }
      });

      $('#menus-modal').modal('show');
    })

    $('#menus-save-btn').click(function(event){
      event.preventDefault();

      var form = $('#menus-body form'), 
          url = form.attr('action'),
          method = 'POST';
      //console.log(url);
      form.find('.help-block').remove();
      form.find('.form-group').removeClass('has-error');
      $.ajax({
        url:url,
        method:method,
        data:form.serialize(),
        success: function(response){
          // window.location.href = "http://localhost/laporan2/public/backend/navigation-tree-view"
        },
        error: function(xhr){
          var errors = xhr.responseJSON;
          if($.isEmptyObject(errors) == false){
            $.each(errors, function(key,value){
              $('#' + key)
                .closest('.form-group')
                .addClass('has-error')
                .append('<span class="help-block"<strong>'+value+'</strong></span>')
            });
          }
        }
      });
      // $('#menus-modal').modal('hide');
    })

    $('.show-edit-modal').click(function(event){
      event.preventDefault();

      $('#edit-modal').modal('show');
    })
    </script>
@endsection

