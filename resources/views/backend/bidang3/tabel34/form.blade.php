<div class="col-xs-12">
  <div class="box">
    <div class="box-body ">
    <div class="form-group {{ $errors->has('pt') ? 'has-error' : '' }}">
            {!! Form::label('pt') !!}
            {!! Form::text('pt', null, ['class' => 'form-control']) !!}

            @if($errors->has('pt'))
                <span class="help-block">{{ $errors->first('pt') }}</span>
            @endif
        </div>
    <div class="form-group {{ $errors->has('tahun') ? 'has-error' : '' }}">
            {!! Form::label('tahun') !!}
            {!! Form::text('tahun', null, ['class' => 'form-control']) !!}

            @if($errors->has('tahun'))
                <span class="help-block">{{ $errors->first('tahun') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('emas') ? 'has-error' : '' }}">
            {!! Form::label('emas') !!}
            {!! Form::text('emas', null, ['class' => 'form-control']) !!}

            @if($errors->has('emas'))
                <span class="help-block">{{ $errors->first('emas') }}</span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('perak') ? 'has-error' : '' }}">
            {!! Form::label('perak') !!}
            {!! Form::text('perak', null, ['class' => 'form-control']) !!}

            @if($errors->has('perak'))
                <span class="help-block">{{ $errors->first('perak') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('perunggu') ? 'has-error' : '' }}">
            {!! Form::label('perunggu') !!}
            {!! Form::text('perunggu', null, ['class' => 'form-control']) !!}

            @if($errors->has('perunggu'))
                <span class="help-block">{{ $errors->first('perunggu') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('h1') ? 'has-error' : '' }}">
            {!! Form::label('h1') !!}
            {!! Form::text('h1', null, ['class' => 'form-control']) !!}

            @if($errors->has('h1'))
                <span class="help-block">{{ $errors->first('h1') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('h2') ? 'has-error' : '' }}">
            {!! Form::label('h2') !!}
            {!! Form::text('h2', null, ['class' => 'form-control']) !!}

            @if($errors->has('h2'))
                <span class="help-block">{{ $errors->first('h2') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('h3') ? 'has-error' : '' }}">
            {!! Form::label('h3') !!}
            {!! Form::text('h3', null, ['class' => 'form-control']) !!}

            @if($errors->has('h3'))
                <span class="help-block">{{ $errors->first('h3') }}</span>
            @endif
        </div>
         <div class="form-group {{ $errors->has('fav') ? 'has-error' : '' }}">
            {!! Form::label('fav') !!}
            {!! Form::text('fav', null, ['class' => 'form-control']) !!}

            @if($errors->has('fav'))
                <span class="help-block">{{ $errors->first('fav') }}</span>
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
