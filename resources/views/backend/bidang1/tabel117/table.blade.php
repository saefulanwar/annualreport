<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</td>
                         <th>Guru Besar</th>
                         <th>Dosen Aktif</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel117 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel117.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel117.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->tahun }}</td>                         
                         <td>{{ $data->gurubesar }}</td>
                         <td>{{ $data->dosenaktif }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>