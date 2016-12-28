<div class="col-xs-12">
  <div class="box">
    <div class="box-body ">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}

            @if($errors->has('name'))
                <span class="help-block">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            {!! Form::label('alamat email') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}

            @if($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
            {!! Form::label('password') !!}           
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
            @if($errors->has('password'))
                <span class="help-block">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('confirm-password') ? 'has-error' : '' }}">
            {!! Form::label('confirm password') !!}           
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
            @if($errors->has('confirm-password'))
                <span class="help-block">{{ $errors->first('confirm-password') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('role') ? 'has-error' : '' }}">
            {!! Form::label('role') !!}           
            {!! Form::select('roles[]', $roles, $userRole, ['id'=>'role','class'=>'js-selectize','placeholder'=>'Pilih Roles','multiple']) !!}
            @if($errors->has('role'))
                <span class="help-block">{{ $errors->first('role') }}</span>
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
