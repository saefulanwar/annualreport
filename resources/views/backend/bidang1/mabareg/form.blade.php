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
        <div class="form-group {{ $errors->has('s1') ? 'has-error' : '' }}">
            {!! Form::label('d3 dan s1') !!}
            {!! Form::text('s1', null, ['class' => 'form-control']) !!}

            @if($errors->has('s1'))
                <span class="help-block">{{ $errors->first('s1') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('s2') ? 'has-error' : '' }}">
            {!! Form::label('s2') !!}
            {!! Form::text('s2', null, ['class' => 'form-control']) !!}

            @if($errors->has('s2'))
                <span class="help-block">{{ $errors->first('s2') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('s3') ? 'has-error' : '' }}">
            {!! Form::label('s3') !!}
            {!! Form::text('s3', null, ['class' => 'form-control']) !!}

            @if($errors->has('s3'))
                <span class="help-block">{{ $errors->first('s3') }}</span>
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
