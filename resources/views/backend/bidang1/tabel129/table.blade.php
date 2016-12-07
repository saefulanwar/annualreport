<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Kegiatan</td>
                         <th>Pembicara</th>
                         <th>Tempat</th>
                         <th>Waktu</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel129 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel129.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel129.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->kegiatan }}</td>                         
                         <td>{{ $data->pembicara }}</td>
                         <td>{{ $data->tempat }}</td>
                         <td>{{ $data->waktu }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>