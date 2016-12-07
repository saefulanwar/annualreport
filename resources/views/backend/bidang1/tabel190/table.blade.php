<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tanggal</td>
                         <th>Kegiatan</th>
                         <th>Tempat</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel190 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel190.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel190.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->tanggal}}</td>                         
                         <td>{{ $data->kegiatan }}</td>
                         <td>{{ $data->tempat }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>