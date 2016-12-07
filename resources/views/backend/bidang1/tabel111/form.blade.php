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
        <div class="form-group {{ $errors->has('jenjang') ? 'has-error' : '' }}">
            {!! Form::label('jenjang') !!}
            {!! Form::text('jenjang', null, ['class' => 'form-control']) !!}

            @if($errors->has('jenjang'))
                <span class="help-block">{{ $errors->first('jenjang') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('dn') ? 'has-error' : '' }}">
            {!! Form::label('dn') !!}
            {!! Form::text('dn', null, ['class' => 'form-control']) !!}

            @if($errors->has('dn'))
                <span class="help-block">{{ $errors->first('dn') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('ln') ? 'has-error' : '' }}">
            {!! Form::label('ln') !!}
            {!! Form::text('ln', null, ['class' => 'form-control']) !!}

            @if($errors->has('ln'))
                <span class="help-block">{{ $errors->first('ln') }}</span>
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
