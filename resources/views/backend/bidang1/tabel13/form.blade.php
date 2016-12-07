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
        <div class="form-group {{ $errors->has('ptn') ? 'has-error' : '' }}">
            {!! Form::label('ptn') !!}
            {!! Form::text('ptn', null, ['class' => 'form-control']) !!}

            @if($errors->has('ptn'))
                <span class="help-block">{{ $errors->first('ptn') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('nilai') ? 'has-error' : '' }}">
            {!! Form::label('nilai') !!}
            {!! Form::text('nilai', null, ['class' => 'form-control']) !!}

            @if($errors->has('nilai'))
                <span class="help-block">{{ $errors->first('nilai') }}</span>
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
