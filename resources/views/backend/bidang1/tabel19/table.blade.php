<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</td>
                         <th>D3</th>
                         <th>S1</th>
                         <th>S2</th>
                         <th>S3</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel19 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel19.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel19.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->tahun }}</td>
                         <td>{{ $data->d3 }}</td>
                         <td>{{ $data->s1 }}</td>
                         <td>{{ $data->s2 }}</td>
                         <td>{{ $data->s3 }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>