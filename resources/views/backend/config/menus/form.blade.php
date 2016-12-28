
          {!! Form::model($navigation, ['route'=>'navigation-tree-view.store']) !!}
          {{ csrf_field() }}
            <div class="form-group">
              <label for="" class="control-label">Name</label>
              {!! Form::text('name', null, ['class'=>'form-control','id'=>'name']) !!}
            </div>
            <div class="form-group">
              <label for="" class="control-label">Icon</label>
              {!! Form::text('icon', null, ['class'=>'form-control','id'=>'icon']) !!}
            </div>
            <div class="form-group">
              <label for="" class="control-label">URI/URL</label>
              {!! Form::text('url', null, ['class'=>'form-control','id'=>'url']) !!}
            </div>
            <div class="form-group">
              <label class="control-label">Description</label>
              {!! Form::textarea('description', null, ['class'=>'form-control','id'=>'description','rows'=> 2]) !!}
            </div>
          {!! form::close() !!}
