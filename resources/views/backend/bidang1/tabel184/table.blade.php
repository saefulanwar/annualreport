<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Domain</td>
                         <th>Unit</th>
                         <th>Tahun</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel184 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel184.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel184.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->domain}}</td>                         
                         <td>{{ $data->unit }}</td>
                         <td>{{ $data->tahun }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>