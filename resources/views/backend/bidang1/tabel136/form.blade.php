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
        <div class="form-group {{ $errors->has('proposal') ? 'has-error' : '' }}">
            {!! Form::label('proposal') !!}
            {!! Form::text('proposal', null, ['class' => 'form-control']) !!}

            @if($errors->has('proposal'))
                <span class="help-block">{{ $errors->first('proposal') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('diterima') ? 'has-error' : '' }}">
            {!! Form::label('diterima') !!}
            {!! Form::text('diterima', null, ['class' => 'form-control']) !!}

            @if($errors->has('diterima'))
                <span class="help-block">{{ $errors->first('diterima') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('ket') ? 'has-error' : '' }}">
            {!! Form::label('ket') !!}
            {!! Form::text('ket', null, ['class' => 'form-control']) !!}

            @if($errors->has('ket'))
                <span class="help-block">{{ $errors->first('ket') }}</span>
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
