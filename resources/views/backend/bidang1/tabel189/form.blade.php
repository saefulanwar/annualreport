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
        <div class="form-group {{ $errors->has('target') ? 'has-error' : '' }}">
            {!! Form::label('target') !!}
            {!! Form::text('target', null, ['class' => 'form-control']) !!}

            @if($errors->has('target'))
                <span class="help-block">{{ $errors->first('target') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('capaian') ? 'has-error' : '' }}">
            {!! Form::label('capaian') !!}
            {!! Form::text('capaian', null, ['class' => 'form-control']) !!}

            @if($errors->has('capaian'))
                <span class="help-block">{{ $errors->first('capaian') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('mhs') ? 'has-error' : '' }}">
            {!! Form::label('mhs') !!}
            {!! Form::text('mhs', null, ['class' => 'form-control']) !!}

            @if($errors->has('mhs'))
                <span class="help-block">{{ $errors->first('mhs') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('kary') ? 'has-error' : '' }}">
            {!! Form::label('kary') !!}
            {!! Form::text('kary', null, ['class' => 'form-control']) !!}

            @if($errors->has('kary'))
                <span class="help-block">{{ $errors->first('kary') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('dosen') ? 'has-error' : '' }}">
            {!! Form::label('dosen') !!}
            {!! Form::text('dosen', null, ['class' => 'form-control']) !!}

            @if($errors->has('dosen'))
                <span class="help-block">{{ $errors->first('dosen') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('umum') ? 'has-error' : '' }}">
            {!! Form::label('umum') !!}
            {!! Form::text('umum', null, ['class' => 'form-control']) !!}

            @if($errors->has('umum'))
                <span class="help-block">{{ $errors->first('umum') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('dana') ? 'has-error' : '' }}">
            {!! Form::label('dana') !!}
            {!! Form::text('dana', null, ['class' => 'form-control']) !!}

            @if($errors->has('dana'))
                <span class="help-block">{{ $errors->first('dana') }}</span>
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
