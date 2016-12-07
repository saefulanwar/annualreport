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

        <div class="form-group {{ $errors->has('luas_total') ? 'has-error' : '' }}">
            {!! Form::label('Luas Total') !!}
            {!! Form::text('luas_total', null, ['class' => 'form-control']) !!}

            @if($errors->has('luas_total'))
                <span class="help-block">{{ $errors->first('luas_total') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('sertifikat') ? 'has-error' : '' }}">
            {!! Form::label('sertifikat') !!}
            {!! Form::text('sertifikat', null, ['class' => 'form-control']) !!}

            @if($errors->has('sertifikat'))
                <span class="help-block">{{ $errors->first('sertifikat') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('luas_sertifikat') ? 'has-error' : '' }}">
            {!! Form::label('Luas Sertifikat') !!}
            {!! Form::text('luas_sertifikat', null, ['class' => 'form-control']) !!}

            @if($errors->has('luas_sertifikat'))
                <span class="help-block">{{ $errors->first('luas_sertifikat') }}</span>
            @endif
        </div>
         <div class="form-group {{ $errors->has('jumlah_lokasi') ? 'has-error' : '' }}">
            {!! Form::label('Jumlah Lokasi') !!}
            {!! Form::text('jumlah_lokasi', null, ['class' => 'form-control']) !!}

            @if($errors->has('jumlah_lokasi'))
                <span class="help-block">{{ $errors->first('jumlah_lokasi') }}</span>
            @endif
        </div>
         <div class="form-group {{ $errors->has('luas_lokasi') ? 'has-error' : '' }}">
            {!! Form::label('Luas Lokasi') !!}
            {!! Form::text('luas_lokasi', null, ['class' => 'form-control']) !!}

            @if($errors->has('luas_lokasi'))
                <span class="help-block">{{ $errors->first('luas_lokasi') }}</span>
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
