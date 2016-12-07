<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Fakultas</td>
                         <th>Usul</th>
                         <th>Kontrak</th>
                         <th>S1</td>
                         <th>S2</th>
                         <th>S3</th>
                         <th>Mhs</th>
                         <th>Dana</th>
                         <th>Tahun</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel142 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel142.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel142.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->fakultas}}</td>
                         <td>{{ $data->usul }}</td>
                         <td>{{ $data->kontrak }}</td>
                         <td>{{ $data->s1}}</td>                         
                         <td>{{ $data->s2 }}</td>
                         <td>{{ $data->s3 }}</td>
                         <td>{{ $data->mhs }}</td>
                         <td>{{ $data->dana }}</td>
                         <td>{{ $data->tahun }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>