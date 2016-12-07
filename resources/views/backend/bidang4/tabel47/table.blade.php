<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Nama</td>
                         <th>Jenis Dokumen</th>
                         <th>Mulai</th>
                         <th>Akhir Masa Berlaku</td>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel47 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel47.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel47.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->nama}}</td>                         
                         <td>{{ $data->jenis_dokumen }}</td>
                         <td>{{ $data->mulai }}</td>
                         <td>{{ $data->akhir}}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>