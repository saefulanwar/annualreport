<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</td>
                         <th>Fakultas</th>
                         <th>Nama Beasiswa</th>
                         <th>Jumlah</td>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel37 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel37.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel37.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->tahun}}</td>                         
                         <td>{{ $data->fakultas }}</td>
                         <td>{{ $data->nama_beasiswa }}</td>
                         <td>{{ $data->jumlah}}</td> 
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>