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
        <div class="form-group {{ $errors->has('guladarah') ? 'has-error' : '' }}">
            {!! Form::label('guladarah') !!}
            {!! Form::text('guladarah', null, ['class' => 'form-control']) !!}

            @if($errors->has('guladarah'))
                <span class="help-block">{{ $errors->first('guladarah') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('kolesterol') ? 'has-error' : '' }}">
            {!! Form::label('kolesterol') !!}
            {!! Form::text('kolesterol', null, ['class' => 'form-control']) !!}

            @if($errors->has('kolesterol'))
                <span class="help-block">{{ $errors->first('kolesterol') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('asamurat') ? 'has-error' : '' }}">
            {!! Form::label('asamurat') !!}
            {!! Form::text('asamurat', null, ['class' => 'form-control']) !!}

            @if($errors->has('asamurat'))
                <span class="help-block">{{ $errors->first('asamurat') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('goldarah') ? 'has-error' : '' }}">
            {!! Form::label('goldarah') !!}
            {!! Form::text('goldarah', null, ['class' => 'form-control']) !!}

            @if($errors->has('goldarah'))
                <span class="help-block">{{ $errors->first('goldarah') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('hb') ? 'has-error' : '' }}">
            {!! Form::label('hb') !!}
            {!! Form::text('hb', null, ['class' => 'form-control']) !!}

            @if($errors->has('hb'))
                <span class="help-block">{{ $errors->first('hb') }}</span>
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
