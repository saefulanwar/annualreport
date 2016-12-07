<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</td>
                         <th>Target</th>
                         <th>Capaian</th>
                         <th>Gula Darah</td>
                         <th>Kolesterol</th>
                         <th>Asam Urat</th>
                         <th>Gol Darah</td>
                         <th>HB</td>
                         <th>Dana</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel188 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel188.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel188.edit', $data->id) }}" class="btn btn-xs btn-default">
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
                         <td>{{ $data->guladarah}}</td>                         
                         <td>{{ $data->kolesterol }}</td>
                         <td>{{ $data->asamurat }}</td>
                         <td>{{ $data->goldarah}}</td>
                         <td>{{ $data->hb }}</td>                         
                         <td>{{ $data->dana }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>