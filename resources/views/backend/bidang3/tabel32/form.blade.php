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
        <div class="form-group {{ $errors->has('internasional') ? 'has-error' : '' }}">
            {!! Form::label('internasional') !!}
            {!! Form::text('internasional', null, ['class' => 'form-control']) !!}

            @if($errors->has('internasional'))
                <span class="help-block">{{ $errors->first('internasional') }}</span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('regional') ? 'has-error' : '' }}">
            {!! Form::label('regional') !!}
            {!! Form::text('regional', null, ['class' => 'form-control']) !!}

            @if($errors->has('regional'))
                <span class="help-block">{{ $errors->first('regional') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('nasional') ? 'has-error' : '' }}">
            {!! Form::label('nasional') !!}
            {!! Form::text('nasional', null, ['class' => 'form-control']) !!}

            @if($errors->has('nasional'))
                <span class="help-block">{{ $errors->first('nasional') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('wilayah') ? 'has-error' : '' }}">
            {!! Form::label('wilayah') !!}
            {!! Form::text('wilayah', null, ['class' => 'form-control']) !!}

            @if($errors->has('wilayah'))
                <span class="help-block">{{ $errors->first('wilayah') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('daerah') ? 'has-error' : '' }}">
            {!! Form::label('daerah') !!}
            {!! Form::text('daerah', null, ['class' => 'form-control']) !!}

            @if($errors->has('daerah'))
                <span class="help-block">{{ $errors->first('daerah') }}</span>
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
