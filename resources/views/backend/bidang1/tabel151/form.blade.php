<div class="col-xs-12">
  <div class="box">
    <div class="box-body ">

        <div class="form-group {{ $errors->has('program') ? 'has-error' : '' }}">
            {!! Form::label('program') !!}
            {!! Form::text('program', null, ['class' => 'form-control']) !!}

            @if($errors->has('program'))
                <span class="help-block">{{ $errors->first('program') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('waktu') ? 'has-error' : '' }}">
            {!! Form::label('waktu') !!}
            {!! Form::text('waktu', null, ['class' => 'form-control']) !!}

            @if($errors->has('waktu'))
                <span class="help-block">{{ $errors->first('waktu') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('peserta') ? 'has-error' : '' }}">
            {!! Form::label('peserta') !!}
            {!! Form::text('peserta', null, ['class' => 'form-control']) !!}

            @if($errors->has('peserta'))
                <span class="help-block">{{ $errors->first('peserta') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('hasil') ? 'has-error' : '' }}">
            {!! Form::label('hasil') !!}
            {!! Form::text('hasil', null, ['class' => 'form-control']) !!}

            @if($errors->has('hasil'))
                <span class="help-block">{{ $errors->first('hasil') }}</span>
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
