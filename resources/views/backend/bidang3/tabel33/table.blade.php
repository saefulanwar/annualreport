<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</td>
                         <th>Fakultas</th>
                         <th>PKMK</th>
                         <th>PKMKC</td>
                         <th>PKMM</th>
                         <th>PKMP</th>
                         <th>PKMT</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel33 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel33.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel33.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->tahun}}</td>                         
                         <td>{{ $data->fakultas }}</td>
                         <td>{{ $data->pkmk }}</td>
                         <td>{{ $data->pkmkc}}</td>                         
                         <td>{{ $data->pkmm }}</td>
                         <td>{{ $data->pkmp }}</td>
                         <td>{{ $data->pkmt }}</td> 
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>