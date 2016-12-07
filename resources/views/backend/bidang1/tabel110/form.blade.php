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
        <div class="form-group {{ $errors->has('pend') ? 'has-error' : '' }}">
            {!! Form::label('pend') !!}
            {!! Form::text('pend', null, ['class' => 'form-control']) !!}

            @if($errors->has('pend'))
                <span class="help-block">{{ $errors->first('pend') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('jumlah') ? 'has-error' : '' }}">
            {!! Form::label('jumlah') !!}
            {!! Form::text('jumlah', null, ['class' => 'form-control']) !!}

            @if($errors->has('jumlah'))
                <span class="help-block">{{ $errors->first('jumlah') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('prosentase') ? 'has-error' : '' }}">
            {!! Form::label('prosentase') !!}
            {!! Form::text('prosentase', null, ['class' => 'form-control']) !!}

            @if($errors->has('prosentase'))
                <span class="help-block">{{ $errors->first('prosentase') }}</span>
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
