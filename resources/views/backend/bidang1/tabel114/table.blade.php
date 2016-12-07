<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</td>
                         <th>Jumlah</th>
                         <th>Dana</th>
                         <th>Peminat</th>
                         <th>Didanai</th>
                         <th>Terselesaikan</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel114 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel114.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel114.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->tahun }}</td>                         
                         <td>{{ $data->jumlah }}</td>
                         <td>{{ $data->dana }}</td>
                         <td>{{ $data->peminat }}</td>
                         <td>{{ $data->didanai }}</td>
                         <td>{{ $data->terselesaikan }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>