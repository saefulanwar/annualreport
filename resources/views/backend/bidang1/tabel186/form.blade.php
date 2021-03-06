<div class="col-xs-12">
  <div class="box">
    <div class="box-body ">

        <div class="form-group {{ $errors->has('bulan') ? 'has-error' : '' }}">
            {!! Form::label('bulan') !!}
            {!! Form::text('bulan', null, ['class' => 'form-control']) !!}

            @if($errors->has('bulan'))
                <span class="help-block">{{ $errors->first('bulan') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('jumlah') ? 'has-error' : '' }}">
            {!! Form::label('jumlah') !!}
            {!! Form::text('jumlah', null, ['class' => 'form-control']) !!}

            @if($errors->has('jumlah'))
                <span class="help-block">{{ $errors->first('jumlah') }}</span>
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
