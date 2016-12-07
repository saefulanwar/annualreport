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
        <div class="form-group {{ $errors->has('premi') ? 'has-error' : '' }}">
            {!! Form::label('premi') !!}
            {!! Form::text('premi', null, ['class' => 'form-control']) !!}

            @if($errors->has('premi'))
                <span class="help-block">{{ $errors->first('premi') }}</span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('klaim') ? 'has-error' : '' }}">
            {!! Form::label('klaim') !!}
            {!! Form::text('klaim', null, ['class' => 'form-control']) !!}

            @if($errors->has('klaim'))
                <span class="help-block">{{ $errors->first('klaim') }}</span>
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
