<div class="col-xs-12">
  <div class="box">
    <div class="box-body ">

        <div class="form-group {{ $errors->has('fakultas') ? 'has-error' : '' }}">
            {!! Form::label('fakultas') !!}
            {!! Form::text('fakultas', null, ['class' => 'form-control']) !!}

            @if($errors->has('fakultas'))
                <span class="help-block">{{ $errors->first('fakultas') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('gasal') ? 'has-error' : '' }}">
            {!! Form::label('gasal') !!}
            {!! Form::text('gasal', null, ['class' => 'form-control']) !!}

            @if($errors->has('gasal'))
                <span class="help-block">{{ $errors->first('gasal') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('genap') ? 'has-error' : '' }}">
            {!! Form::label('genap') !!}
            {!! Form::text('genap', null, ['class' => 'form-control']) !!}

            @if($errors->has('genap'))
                <span class="help-block">{{ $errors->first('genap') }}</span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('genap') ? 'has-error' : '' }}">
            {!! Form::label('genap') !!}
            {!! Form::text('genap', null, ['class' => 'form-control']) !!}

            @if($errors->has('genap'))
                <span class="help-block">{{ $errors->first('genap') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('khusus') ? 'has-error' : '' }}">
            {!! Form::label('khusus') !!}
            {!! Form::text('khusus', null, ['class' => 'form-control']) !!}

            @if($errors->has('khusus'))
                <span class="help-block">{{ $errors->first('khusus') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('ppkhb') ? 'has-error' : '' }}">
            {!! Form::label('ppkhb') !!}
            {!! Form::text('ppkhb', null, ['class' => 'form-control']) !!}

            @if($errors->has('ppkhb'))
                <span class="help-block">{{ $errors->first('ppkhb') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('ta') ? 'has-error' : '' }}">
            {!! Form::label('ta') !!}
            {!! Form::text('ta', null, ['class' => 'form-control']) !!}

            @if($errors->has('ta'))
                <span class="help-block">{{ $errors->first('ta') }}</span>
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
