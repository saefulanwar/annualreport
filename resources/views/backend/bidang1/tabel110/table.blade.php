<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</td>
                         <th>Pendidikan</th>
                         <th>Jumlah</th>
                         <th>Prosentase</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel110 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel110.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel110.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->tahun }}</td>
                         <td>{{ $data->pend }}</td>
                         <td>{{ $data->jumlah }}</td>
                         <td>{{ $data->prosentase }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>