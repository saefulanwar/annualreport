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
        <div class="form-group {{ $errors->has('nonpks') ? 'has-error' : '' }}">
            {!! Form::label('nonpks') !!}
            {!! Form::text('nonpks', null, ['class' => 'form-control']) !!}

            @if($errors->has('nonpks'))
                <span class="help-block">{{ $errors->first('nonpks') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('mabatik') ? 'has-error' : '' }}">
            {!! Form::label('mabatik') !!}
            {!! Form::text('mabatik', null, ['class' => 'form-control']) !!}

            @if($errors->has('mabatik'))
                <span class="help-block">{{ $errors->first('mabatik') }}</span>
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
