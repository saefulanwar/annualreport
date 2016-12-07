<div class="col-xs-12">
  <div class="box">
    <div class="box-body ">

        <div class="form-group {{ $errors->has('skim') ? 'has-error' : '' }}">
            {!! Form::label('skim') !!}
            {!! Form::text('skim', null, ['class' => 'form-control']) !!}

            @if($errors->has('skim'))
                <span class="help-block">{{ $errors->first('skim') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('usulan') ? 'has-error' : '' }}">
            {!! Form::label('usulan') !!}
            {!! Form::text('usulan', null, ['class' => 'form-control']) !!}

            @if($errors->has('usulan'))
                <span class="help-block">{{ $errors->first('usulan') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('kontrak') ? 'has-error' : '' }}">
            {!! Form::label('kontrak') !!}
            {!! Form::text('kontrak', null, ['class' => 'form-control']) !!}

            @if($errors->has('kontrak'))
                <span class="help-block">{{ $errors->first('kontrak') }}</span>
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
