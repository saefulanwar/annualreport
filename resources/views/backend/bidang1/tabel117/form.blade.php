<div class="col-xs-12">
  <div class="box">
    <div class="box-body ">

        <div class="form-group {{ $errors->has('tahun') ? 'has-error' : '' }}">
            {!! Form::label('tahun') !!}
            {!! Form::text('tahun', null, ['class' => 'form-control']) !!}

            @if($errors->has('tahun'))
                <span class="help-block">{{ $errors->first('tahun') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('gurubesar') ? 'has-error' : '' }}">
            {!! Form::label('gurubesar') !!}
            {!! Form::text('gurubesar', null, ['class' => 'form-control']) !!}

            @if($errors->has('gurubesar'))
                <span class="help-block">{{ $errors->first('gurubesar') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('dosenaktif') ? 'has-error' : '' }}">
            {!! Form::label('dosenaktif') !!}
            {!! Form::text('dosenaktif', null, ['class' => 'form-control']) !!}

            @if($errors->has('dosenaktif'))
                <span class="help-block">{{ $errors->first('dosenaktif') }}</span>
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
