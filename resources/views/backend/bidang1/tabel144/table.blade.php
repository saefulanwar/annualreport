<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Fakultas</td>
                         <th>Gasal</th>
                         <th>Genap</th>
                         <th>Khusus</th>
                         <th>PPKHB</td>
                         <th>TA</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel144 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel144.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel144.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->fakultas}}</td>                         
                         <td>{{ $data->gasal }}</td>
                         <td>{{ $data->genap }}</td>
                         <td>{{ $data->khusus }}</td>
                         <td>{{ $data->ppkhb}}</td>                         
                         <td>{{ $data->ta }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>