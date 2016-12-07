<div class="col-xs-12">
  <div class="box">
    <div class="box-body ">
    <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
            {!! Form::label('nama') !!}
            {!! Form::text('nama', null, ['class' => 'form-control']) !!}

            @if($errors->has('nama'))
                <span class="help-block">{{ $errors->first('nama') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('jenis_dokumen') ? 'has-error' : '' }}">
            {!! Form::label('jenis_dokumen') !!}
            {!! Form::text('jenis_dokumen', null, ['class' => 'form-control']) !!}

            @if($errors->has('jenis_dokumen'))
                <span class="help-block">{{ $errors->first('jenis_dokumen') }}</span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('mulai') ? 'has-error' : '' }}">
            {!! Form::label('mulai masa berlaku') !!}
            {!! Form::text('mulai', null, ['class' => 'form-control']) !!}

            @if($errors->has('mulai'))
                <span class="help-block">{{ $errors->first('mulai') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('akhir') ? 'has-error' : '' }}">
            {!! Form::label('akhir masa berlaku') !!}
            {!! Form::text('akhir', null, ['class' => 'form-control']) !!}

            @if($errors->has('akhir'))
                <span class="help-block">{{ $errors->first('akhir') }}</span>
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
