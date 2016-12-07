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

        <div class="form-group {{ $errors->has('pkmk') ? 'has-error' : '' }}">
            {!! Form::label('pkmk') !!}
            {!! Form::text('pkmk', null, ['class' => 'form-control']) !!}

            @if($errors->has('pkmk'))
                <span class="help-block">{{ $errors->first('pkmk') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('pkmkc') ? 'has-error' : '' }}">
            {!! Form::label('pkmkc') !!}
            {!! Form::text('pkmkc', null, ['class' => 'form-control']) !!}

            @if($errors->has('pkmkc'))
                <span class="help-block">{{ $errors->first('pkmkc') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('pkmm') ? 'has-error' : '' }}">
            {!! Form::label('pkmm') !!}
            {!! Form::text('pkmm', null, ['class' => 'form-control']) !!}

            @if($errors->has('pkmm'))
                <span class="help-block">{{ $errors->first('pkmm') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('pkmp') ? 'has-error' : '' }}">
            {!! Form::label('pkmp') !!}
            {!! Form::text('pkmp', null, ['class' => 'form-control']) !!}

            @if($errors->has('pkmp'))
                <span class="help-block">{{ $errors->first('pkmp') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('pkmt') ? 'has-error' : '' }}">
            {!! Form::label('pkmt') !!}
            {!! Form::text('pkmt', null, ['class' => 'form-control']) !!}

            @if($errors->has('pkmt'))
                <span class="help-block">{{ $errors->first('pkmt') }}</span>
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
