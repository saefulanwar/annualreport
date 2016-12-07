<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</td>
                         <th>Target</th>
                         <th>Capaian</th>
                         <th>Mhs</td>
                         <th>Karyawan</th>
                         <th>Dosen</th>
                         <th>Umum</td>
                         <th>Dana</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel189 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel189.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel189.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->tahun}}</td>                         
                         <td>{{ $data->target }}</td>
                         <td>{{ $data->capaian }}</td>
                         <td>{{ $data->mhs}}</td>                         
                         <td>{{ $data->kary }}</td>
                         <td>{{ $data->dosen }}</td>
                         <td>{{ $data->umum}}</td>                         
                         <td>{{ $data->dana }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>