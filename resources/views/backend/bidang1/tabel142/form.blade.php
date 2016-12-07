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
        <div class="form-group {{ $errors->has('usul') ? 'has-error' : '' }}">
            {!! Form::label('usul') !!}
            {!! Form::text('usul', null, ['class' => 'form-control']) !!}

            @if($errors->has('usul'))
                <span class="help-block">{{ $errors->first('usul') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('kontrak') ? 'has-error' : '' }}">
            {!! Form::label('kontrak') !!}
            {!! Form::text('kontrak', null, ['class' => 'form-control']) !!}

            @if($errors->has('kontrak'))
                <span class="help-block">{{ $errors->first('kontrak') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('s1') ? 'has-error' : '' }}">
            {!! Form::label('s1') !!}
            {!! Form::text('s1', null, ['class' => 'form-control']) !!}

            @if($errors->has('s1'))
                <span class="help-block">{{ $errors->first('s1') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('s2') ? 'has-error' : '' }}">
            {!! Form::label('s2') !!}
            {!! Form::text('s2', null, ['class' => 'form-control']) !!}

            @if($errors->has('s2'))
                <span class="help-block">{{ $errors->first('s2') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('s3') ? 'has-error' : '' }}">
            {!! Form::label('s3') !!}
            {!! Form::text('s3', null, ['class' => 'form-control']) !!}

            @if($errors->has('s3'))
                <span class="help-block">{{ $errors->first('s3') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('mhs') ? 'has-error' : '' }}">
            {!! Form::label('mhs') !!}
            {!! Form::text('mhs', null, ['class' => 'form-control']) !!}

            @if($errors->has('mhs'))
                <span class="help-block">{{ $errors->first('mhs') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('dana') ? 'has-error' : '' }}">
            {!! Form::label('dana') !!}
            {!! Form::text('dana', null, ['class' => 'form-control']) !!}

            @if($errors->has('dana'))
                <span class="help-block">{{ $errors->first('dana') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('tahun') ? 'has-error' : '' }}">
            {!! Form::label('tahun') !!}
            {!! Form::text('tahun', null, ['class' => 'form-control']) !!}

            @if($errors->has('tahun'))
                <span class="help-block">{{ $errors->first('tahun') }}</span>
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
