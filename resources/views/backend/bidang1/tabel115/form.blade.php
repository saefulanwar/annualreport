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
        <div class="form-group {{ $errors->has('kuota') ? 'has-error' : '' }}">
            {!! Form::label('kuota') !!}
            {!! Form::text('kuota', null, ['class' => 'form-control']) !!}

            @if($errors->has('kuota'))
                <span class="help-block">{{ $errors->first('kuota') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('lulus') ? 'has-error' : '' }}">
            {!! Form::label('lulus') !!}
            {!! Form::text('lulus', null, ['class' => 'form-control']) !!}

            @if($errors->has('lulus'))
                <span class="help-block">{{ $errors->first('lulus') }}</span>
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
