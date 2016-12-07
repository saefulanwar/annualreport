<div class="col-xs-12">
  <div class="box">
    <div class="box-body ">

        <div class="form-group {{ $errors->has('domain') ? 'has-error' : '' }}">
            {!! Form::label('domain') !!}
            {!! Form::text('domain', null, ['class' => 'form-control']) !!}

            @if($errors->has('domain'))
                <span class="help-block">{{ $errors->first('domain') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('unit') ? 'has-error' : '' }}">
            {!! Form::label('unit') !!}
            {!! Form::text('unit', null, ['class' => 'form-control']) !!}

            @if($errors->has('unit'))
                <span class="help-block">{{ $errors->first('unit') }}</span>
            @endif
        </div>
        
        <div class="form-group {{ $errors->has('tahun') ? 'has-error' : '' }}">
            {!! Form::label('tahun') !!}
            {!! Form::text('tahun', null, ['class' => 'form-control']) !!}

            @if($errors->has('tahun'))
                <span class="help-block">{{ $errors->first('tahun') }}</span>
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
