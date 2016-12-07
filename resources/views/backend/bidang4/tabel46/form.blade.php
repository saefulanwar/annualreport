<div class="col-xs-12">
  <div class="box">
    <div class="box-body ">
    <div class="form-group {{ $errors->has('peserta') ? 'has-error' : '' }}">
            {!! Form::label('peserta') !!}
            {!! Form::text('peserta', null, ['class' => 'form-control']) !!}

            @if($errors->has('peserta'))
                <span class="help-block">{{ $errors->first('peserta') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('tanggal_pelaksanaan') ? 'has-error' : '' }}">
            {!! Form::label('tanggal pelaksanaan') !!}
            {!! Form::text('tanggal_pelaksanaan', null, ['class' => 'form-control']) !!}

            @if($errors->has('tanggal_pelaksanaan'))
                <span class="help-block">{{ $errors->first('tanggal_pelaksanaan') }}</span>
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
