<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</td>
                         <th>Nama Prodi</th>
                         <th>Kegiatan</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel43 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel43.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel43.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->tahun}}</td>                         
                         <td>{{ $data->prodi }}</td>
                         <td>{{ $data->kegiatan }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>