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
        <div class="form-group {{ $errors->has('negara') ? 'has-error' : '' }}">
            {!! Form::label('negara asal') !!}
            {!! Form::text('negara', null, ['class' => 'form-control']) !!}

            @if($errors->has('negara'))
                <span class="help-block">{{ $errors->first('negara') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('tanggal_pelaksanaan') ? 'has-error' : '' }}">
            {!! Form::label('tanggal pelaksanaan') !!}
            {!! Form::text('tanggal_pelaksanaan', null, ['class' => 'form-control']) !!}

            @if($errors->has('tanggal_pelaksanaan'))
                <span class="help-block">{{ $errors->first('tanggal_pelaksanaan') }}</span>
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
