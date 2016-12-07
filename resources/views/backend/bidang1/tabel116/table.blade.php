<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</td>
                         <th>Fakultas</th>
                         <th>Lulus</th>
                         <th>Belum Lulus</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel116 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel116.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel116.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->tahun }}</td>                         
                         <td>{{ $data->fakultas }}</td>
                         <td>{{ $data->lulus }}</td>
                         <td>{{ $data->belum }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>