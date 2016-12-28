<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Name</td>
                         <th>Display Name</th>
                         <th>Description</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($permission as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['permission.destroy', $data->id]]) !!}
                                  <a href="{{ route('permission.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->name}}</td>                         
                         <td>{{ $data->display_name }}</td>
                         <td>{{ $data->description }}
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>