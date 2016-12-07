<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</td>
                         <th>Fakultas</th>
                         <th>Jumlah</th>
                         <th>Keterangan</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel119 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel119.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel119.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->tahun }}</td>                         
                         <td>{{ $data->fakultas }}</td>
                         <td>{{ $data->jumlah }}</td>
                         <td>{{ $data->keterangan}}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>