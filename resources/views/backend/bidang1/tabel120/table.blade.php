<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</td>
                         <th>Nama</th>
                         <th>Judul</th>
                         <th>Unit</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel120 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel120.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel120.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->tahun }}</td>                         
                         <td>{{ $data->nama }}</td>
                         <td>{{ $data->judul }}</td>
                         <td>{{ $data->unit }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>