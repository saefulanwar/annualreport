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
        <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
            {!! Form::label('nama') !!}
            {!! Form::text('nama', null, ['class' => 'form-control']) !!}

            @if($errors->has('nama'))
                <span class="help-block">{{ $errors->first('nama') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('jurusan') ? 'has-error' : '' }}">
            {!! Form::label('jurusan') !!}
            {!! Form::text('jurusan', null, ['class' => 'form-control']) !!}

            @if($errors->has('jurusan'))
                <span class="help-block">{{ $errors->first('jurusan') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('jenis_hki') ? 'has-error' : '' }}">
            {!! Form::label('jenis_hki') !!}
            {!! Form::text('jenis_hki', null, ['class' => 'form-control']) !!}

            @if($errors->has('jenis_hki'))
                <span class="help-block">{{ $errors->first('jenis_hki') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('no_hki') ? 'has-error' : '' }}">
            {!! Form::label('no_hki') !!}
            {!! Form::text('no_hki', null, ['class' => 'form-control']) !!}

            @if($errors->has('no_hki'))
                <span class="help-block">{{ $errors->first('no_hki') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('judul_hki') ? 'has-error' : '' }}">
            {!! Form::label('judul_hki') !!}
            {!! Form::text('judul_hki', null, ['class' => 'form-control']) !!}

            @if($errors->has('judul_hki'))
                <span class="help-block">{{ $errors->first('judul_hki') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('asal_penelitian') ? 'has-error' : '' }}">
            {!! Form::label('asal_penelitian') !!}
            {!! Form::text('asal_penelitian', null, ['class' => 'form-control']) !!}

            @if($errors->has('asal_penelitian'))
                <span class="help-block">{{ $errors->first('asal_penelitian') }}</span>
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
