<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</td>
                         <th>Fakultas</th>
                         <th>IPK</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel18 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel18.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel18.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->tahun }}</td>
                         <td>{{ $data->fakultas }}</td>
                         <td>{{ $data->ipk }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>