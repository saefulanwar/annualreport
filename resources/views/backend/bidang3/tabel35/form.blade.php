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
        <div class="form-group {{ $errors->has('fakultas') ? 'has-error' : '' }}">
            {!! Form::label('fakultas') !!}
            {!! Form::text('fakultas', null, ['class' => 'form-control']) !!}

            @if($errors->has('fakultas'))
                <span class="help-block">{{ $errors->first('fakultas') }}</span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
            {!! Form::label('nama') !!}
            {!! Form::text('nama', null, ['class' => 'form-control']) !!}

            @if($errors->has('nama'))
                <span class="help-block">{{ $errors->first('nama') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('jenjang') ? 'has-error' : '' }}">
            {!! Form::label('jenjang') !!}
            {!! Form::text('jenjang', null, ['class' => 'form-control']) !!}

            @if($errors->has('jenjang'))
                <span class="help-block">{{ $errors->first('jenjang') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('peringkat') ? 'has-error' : '' }}">
            {!! Form::label('peringkat') !!}
            {!! Form::text('peringkat', null, ['class' => 'form-control']) !!}

            @if($errors->has('peringkat'))
                <span class="help-block">{{ $errors->first('peringkat') }}</span>
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
