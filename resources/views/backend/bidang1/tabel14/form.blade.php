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
        <div class="form-group {{ $errors->has('peminat') ? 'has-error' : '' }}">
            {!! Form::label('peminat') !!}
            {!! Form::text('peminat', null, ['class' => 'form-control']) !!}

            @if($errors->has('peminat'))
                <span class="help-block">{{ $errors->first('peminat') }}</span>
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
