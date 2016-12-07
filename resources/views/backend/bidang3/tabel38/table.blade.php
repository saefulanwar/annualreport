<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</td>
                         <th>Premi</th>
                         <th>Klaim</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel38 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel38.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel38.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->tahun}}</td>                         
                         <td>{{ $data->premi }}</td>
                         <td>{{ $data->klaim }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>