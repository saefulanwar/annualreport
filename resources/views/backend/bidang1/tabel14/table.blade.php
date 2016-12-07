<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</td>
                         <th>PTN</th>
                         <th>Peminat</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel14 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel14.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel14.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->tahun }}</td>
                         <td>{{ $data->ptn }}</td>
                         <td>{{ $data->peminat }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>