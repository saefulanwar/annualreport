<div class="col-xs-12">
  <div class="box">
    <div class="box-body ">

        <div class="form-group {{ $errors->has('fakultas') ? 'has-error' : '' }}">
            {!! Form::label('fakultas') !!}
            {!! Form::text('fakultas', null, ['class' => 'form-control']) !!}

            @if($errors->has('fakultas'))
                <span class="help-block">{{ $errors->first('fakultas') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('guest') ? 'has-error' : '' }}">
            {!! Form::label('guest') !!}
            {!! Form::text('guest', null, ['class' => 'form-control']) !!}

            @if($errors->has('guest'))
                <span class="help-block">{{ $errors->first('guest') }}</span>
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
