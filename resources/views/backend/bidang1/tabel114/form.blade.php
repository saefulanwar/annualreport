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
        <div class="form-group {{ $errors->has('jumlah') ? 'has-error' : '' }}">
            {!! Form::label('jumlah') !!}
            {!! Form::text('jumlah', null, ['class' => 'form-control']) !!}

            @if($errors->has('jumlah'))
                <span class="help-block">{{ $errors->first('jumlah') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('dana') ? 'has-error' : '' }}">
            {!! Form::label('dana') !!}
            {!! Form::text('dana', null, ['class' => 'form-control']) !!}

            @if($errors->has('dana'))
                <span class="help-block">{{ $errors->first('dana') }}</span>
            @endif
        </div>
        
        <div class="form-group {{ $errors->has('peminat') ? 'has-error' : '' }}">
            {!! Form::label('peminat') !!}
            {!! Form::text('peminat', null, ['class' => 'form-control']) !!}

            @if($errors->has('peminat'))
                <span class="help-block">{{ $errors->first('peminat') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('didanai') ? 'has-error' : '' }}">
            {!! Form::label('didanai') !!}
            {!! Form::text('didanai', null, ['class' => 'form-control']) !!}

            @if($errors->has('didanai'))
                <span class="help-block">{{ $errors->first('didanai') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('terselesaikan') ? 'has-error' : '' }}">
            {!! Form::label('terselesaikan') !!}
            {!! Form::text('terselesaikan', null, ['class' => 'form-control']) !!}

            @if($errors->has('terselesaikan'))
                <span class="help-block">{{ $errors->first('terselesaikan') }}</span>
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
