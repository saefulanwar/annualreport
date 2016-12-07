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

        <div class="form-group {{ $errors->has('guest_lecture') ? 'has-error' : '' }}">
            {!! Form::label('guest lecture') !!}
            {!! Form::text('guest_lecture', null, ['class' => 'form-control']) !!}

            @if($errors->has('guest_lecture'))
                <span class="help-block">{{ $errors->first('guest_lecture') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('asal') ? 'has-error' : '' }}">
            {!! Form::label('asal') !!}
            {!! Form::text('asal', null, ['class' => 'form-control']) !!}

            @if($errors->has('asal'))
                <span class="help-block">{{ $errors->first('asal') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('tanggal_pelaksanaan') ? 'has-error' : '' }}">
            {!! Form::label('tanggal pelaksanaan') !!}
            {!! Form::text('tanggal_pelaksanaan', null, ['class' => 'form-control']) !!}

            @if($errors->has('tanggal_pelaksanaan'))
                <span class="help-block">{{ $errors->first('tanggal_pelaksanaan') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('materi') ? 'has-error' : '' }}">
            {!! Form::label('materi') !!}
            {!! Form::text('materi', null, ['class' => 'form-control']) !!}

            @if($errors->has('materi'))
                <span class="help-block">{{ $errors->first('materi') }}</span>
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
