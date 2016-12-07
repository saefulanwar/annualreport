<div class="col-xs-12">
  <div class="box">
    <div class="box-body ">
     <div class="form-group {{ $errors->has('nama_program') ? 'has-error' : '' }}">
            {!! Form::label('Nama Program') !!}
            {!! Form::text('nama_program', null, ['class' => 'form-control']) !!}

            @if($errors->has('nama_program'))
                <span class="help-block">{{ $errors->first('nama_program') }}</span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('sumber_dana') ? 'has-error' : '' }}">
            {!! Form::label('Sumber Dana') !!}
            {!! Form::text('sumber_dana', null, ['class' => 'form-control']) !!}

            @if($errors->has('sumber_dana'))
                <span class="help-block">{{ $errors->first('sumber_dana') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('mitra') ? 'has-error' : '' }}">
            {!! Form::label('mitra') !!}
            {!! Form::text('mitra', null, ['class' => 'form-control']) !!}

            @if($errors->has('mitra'))
                <span class="help-block">{{ $errors->first('mitra') }}</span>
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
