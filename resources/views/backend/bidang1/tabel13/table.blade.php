<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</td>
                         <th>PTN</th>
                         <th>Nilai Rataan</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel13 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel13.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel13.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->tahun }}</td>
                         <td>{{ $data->ptn }}</td>
                         <td>{{ $data->nilai }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>