<div class="col-xs-12">
  <div class="box">
    <div class="box-body ">

        <div class="form-group {{ $errors->has('subyek') ? 'has-error' : '' }}">
            {!! Form::label('subyek') !!}
            {!! Form::text('subyek', null, ['class' => 'form-control']) !!}

            @if($errors->has('subyek'))
                <span class="help-block">{{ $errors->first('subyek') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('judul') ? 'has-error' : '' }}">
            {!! Form::label('judul') !!}
            {!! Form::text('judul', null, ['class' => 'form-control']) !!}

            @if($errors->has('judul'))
                <span class="help-block">{{ $errors->first('judul') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('eks') ? 'has-error' : '' }}">
            {!! Form::label('eks') !!}
            {!! Form::text('eks', null, ['class' => 'form-control']) !!}

            @if($errors->has('eks'))
                <span class="help-block">{{ $errors->first('eks') }}</span>
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
