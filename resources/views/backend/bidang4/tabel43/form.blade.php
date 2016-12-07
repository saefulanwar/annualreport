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
        <div class="form-group {{ $errors->has('prodi') ? 'has-error' : '' }}">
            {!! Form::label('prodi') !!}
            {!! Form::text('prodi', null, ['class' => 'form-control']) !!}

            @if($errors->has('prodi'))
                <span class="help-block">{{ $errors->first('prodi') }}</span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('kegiatan') ? 'has-error' : '' }}">
            {!! Form::label('kegiatan') !!}
            {!! Form::text('kegiatan', null, ['class' => 'form-control']) !!}

            @if($errors->has('kegiatan'))
                <span class="help-block">{{ $errors->first('kegiatan') }}</span>
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
