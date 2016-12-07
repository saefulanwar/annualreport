<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Fakultas</td>
                         <th>Nama</th>
                         <th>Jurusan</th>
                         <th>Jenis HKI</th>
                         <th>No HKI</td>
                         <th>Judul HKI</th>
                         <th>Status HKI</th>
                         <th>Tahun</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel148 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel148.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel148.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->fakultas}}</td>                         
                         <td>{{ $data->nama }}</td>
                         <td>{{ $data->jurusan }}</td>
                         <td>{{ $data->jenis_hki }}</td>
                         <td>{{ $data->no_hki}}</td>                         
                         <td>{{ $data->judul_hki }}</td>
                         <td>{{ $data->status_hki }}</td>
                         <td>{{ $data->tahun }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>