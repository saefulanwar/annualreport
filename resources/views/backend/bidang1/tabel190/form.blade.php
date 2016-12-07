<div class="col-xs-12">
  <div class="box">
    <div class="box-body ">

        <div class="form-group {{ $errors->has('tanggal') ? 'has-error' : '' }}">
            {!! Form::label('tanggal') !!}
            {!! Form::text('tanggal', null, ['class' => 'form-control']) !!}

            @if($errors->has('tanggal'))
                <span class="help-block">{{ $errors->first('tanggal') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('kegiatan') ? 'has-error' : '' }}">
            {!! Form::label('kegiatan') !!}
            {!! Form::text('kegiatan', null, ['class' => 'form-control']) !!}

            @if($errors->has('kegiatan'))
                <span class="help-block">{{ $errors->first('kegiatan') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('tempat') ? 'has-error' : '' }}">
            {!! Form::label('tempat') !!}
            {!! Form::text('tempat', null, ['class' => 'form-control']) !!}

            @if($errors->has('tempat'))
                <span class="help-block">{{ $errors->first('tempat') }}</span>
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
