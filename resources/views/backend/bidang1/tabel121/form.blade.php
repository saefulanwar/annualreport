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
        <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
            {!! Form::label('nama') !!}
            {!! Form::text('nama', null, ['class' => 'form-control']) !!}

            @if($errors->has('nama'))
                <span class="help-block">{{ $errors->first('nama') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('bidang') ? 'has-error' : '' }}">
            {!! Form::label('bidang') !!}
            {!! Form::text('bidang', null, ['class' => 'form-control']) !!}

            @if($errors->has('bidang'))
                <span class="help-block">{{ $errors->first('bidang') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('institusi') ? 'has-error' : '' }}">
            {!! Form::label('institusi') !!}
            {!! Form::text('institusi', null, ['class' => 'form-control']) !!}

            @if($errors->has('institusi'))
                <span class="help-block">{{ $errors->first('institusi') }}</span>
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
