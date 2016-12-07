<div class="col-xs-12">
  <div class="box">
    <div class="box-body ">

        <div class="form-group {{ $errors->has('kegiatan') ? 'has-error' : '' }}">
            {!! Form::label('kegiatan') !!}
            {!! Form::text('kegiatan', null, ['class' => 'form-control']) !!}

            @if($errors->has('kegiatan'))
                <span class="help-block">{{ $errors->first('kegiatan') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('pembicara') ? 'has-error' : '' }}">
            {!! Form::label('pembicara') !!}
            {!! Form::text('pembicara', null, ['class' => 'form-control']) !!}

            @if($errors->has('pembicara'))
                <span class="help-block">{{ $errors->first('pembicara') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('tempat') ? 'has-error' : '' }}">
            {!! Form::label('tempat') !!}
            {!! Form::text('tempat', null, ['class' => 'form-control']) !!}

            @if($errors->has('tempat'))
                <span class="help-block">{{ $errors->first('tempat') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('waktu') ? 'has-error' : '' }}">
            {!! Form::label('waktu') !!}
            {!! Form::text('waktu', null, ['class' => 'form-control']) !!}

            @if($errors->has('waktu'))
                <span class="help-block">{{ $errors->first('waktu') }}</span>
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
