<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Subyek</td>
                         <th>Judul</th>
                         <th>Eks</th>
                         <th>Tahun</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel169 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel169.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel169.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->subyek}}</td>                         
                         <td>{{ $data->judul }}</td>
                         <td>{{ $data->eks }}</td>
                         <td>{{ $data->tahun }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>