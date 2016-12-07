<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Sumber Dana</td>
                         <th>Realisasi</th>
                         <th>Tahun</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel225 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel225.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel225.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                                                  
                         <td>{{ $data->sumber_dana }}</td>
                         <td>{{ $data->realisasi}}</td>
                         <td>{{ $data->tahun }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>