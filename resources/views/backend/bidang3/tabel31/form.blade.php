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
        <div class="form-group {{ $errors->has('penalaran') ? 'has-error' : '' }}">
            {!! Form::label('penalaran') !!}
            {!! Form::text('penalaran', null, ['class' => 'form-control']) !!}

            @if($errors->has('penalaran'))
                <span class="help-block">{{ $errors->first('penalaran') }}</span>
            @endif
        </div>


        <div class="form-group {{ $errors->has('seni') ? 'has-error' : '' }}">
            {!! Form::label('seni') !!}
            {!! Form::text('seni', null, ['class' => 'form-control']) !!}

            @if($errors->has('seni'))
                <span class="help-block">{{ $errors->first('seni') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('khusus') ? 'has-error' : '' }}">
            {!! Form::label('khusus') !!}
            {!! Form::text('khusus', null, ['class' => 'form-control']) !!}

            @if($errors->has('khusus'))
                <span class="help-block">{{ $errors->first('khusus') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('olahraga') ? 'has-error' : '' }}">
            {!! Form::label('olahraga') !!}
            {!! Form::text('olahraga', null, ['class' => 'form-control']) !!}

            @if($errors->has('olahraga'))
                <span class="help-block">{{ $errors->first('olahraga') }}</span>
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
