<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Fakultas</td>
                         <th>Guest</th>
                         <th>Asal</th>
                         <th>Tanggal</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel130 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel130.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel130.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->fakultas }}</td>                         
                         <td>{{ $data->guest }}</td>
                         <td>{{ $data->asal }}</td>
                         <td>{{ $data->tanggal }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>