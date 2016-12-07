<div class="col-xs-12">
  <div class="box">
    <div class="box-body ">
    <div class="form-group {{ $errors->has('pelaksana_kegiatan') ? 'has-error' : '' }}">
            {!! Form::label('pelaksana kegiatan') !!}
            {!! Form::text('pelaksana_kegiatan', null, ['class' => 'form-control']) !!}

            @if($errors->has('pelaksana_kegiatan'))
                <span class="help-block">{{ $errors->first('pelaksana_kegiatan') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('nama_kegiatan') ? 'has-error' : '' }}">
            {!! Form::label('nama kegiatan') !!}
            {!! Form::text('nama_kegiatan', null, ['class' => 'form-control']) !!}

            @if($errors->has('nama_kegiatan'))
                <span class="help-block">{{ $errors->first('nama_kegiatan') }}</span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('tamu') ? 'has-error' : '' }}">
            {!! Form::label('tamu') !!}
            {!! Form::text('tamu', null, ['class' => 'form-control']) !!}

            @if($errors->has('tamu'))
                <span class="help-block">{{ $errors->first('tamu') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('asal') ? 'has-error' : '' }}">
            {!! Form::label('asal') !!}
            {!! Form::text('asal', null, ['class' => 'form-control']) !!}

            @if($errors->has('asal'))
                <span class="help-block">{{ $errors->first('asal') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('tanggal') ? 'has-error' : '' }}">
            {!! Form::label('tanggal') !!}
            {!! Form::text('tanggal', null, ['class' => 'form-control']) !!}

            @if($errors->has('tanggal'))
                <span class="help-block">{{ $errors->first('tanggal') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('peserta') ? 'has-error' : '' }}">
            {!! Form::label('peserta') !!}
            {!! Form::text('peserta', null, ['class' => 'form-control']) !!}

            @if($errors->has('peserta'))
                <span class="help-block">{{ $errors->first('peserta') }}</span>
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
