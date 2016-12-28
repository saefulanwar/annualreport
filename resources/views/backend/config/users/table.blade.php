<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Name</td>
                         <th>Email</th>
                         <th>Role</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($user as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $data->id]]) !!}
                                  <a href="{{ route('user.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->name}}</td>                         
                         <td>{{ $data->email }}</td>
                         <td>
                              @if(! empty($data->roles))
                                @foreach($data->roles as $v)
                                  <strong>{{ $v->name }}</strong>
                                @endforeach 
                              @endif 
                              <a href="#" class="btn btn-xs btn-default"> Permission</a>
                         </td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>