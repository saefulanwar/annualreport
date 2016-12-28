<div class="col-xs-12">
  <div class="box">
    <div class="box-body ">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}

            @if($errors->has('name'))
                <span class="help-block">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('display_name') ? 'has-error' : '' }}">
            {!! Form::label('display name') !!}
            {!! Form::text('display_name', null, ['class' => 'form-control']) !!}

            @if($errors->has('display_name'))
                <span class="help-block">{{ $errors->first('display_name') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
            {!! Form::label('keterangan') !!}
            {!! Form::text('description', null, ['class' => 'form-control']) !!}

            @if($errors->has('description'))
                <span class="help-block">{{ $errors->first('description') }}</span>
            @endif
        </div>    
        
               
        <div class="box-footer clearfix">
            <div class="pull-left">
                {!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}
            </div>
            <div class="pull-right">
            </div>
        </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
</div>
