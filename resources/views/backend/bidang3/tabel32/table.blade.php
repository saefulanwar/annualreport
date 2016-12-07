<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</td>
                         <th>Internasional</th>
                         <th>Regional</th>
                         <th>Nasional</td>
                         <th>Wilayah</th>
                         <th>Daerah</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel32 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel32.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel32.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->tahun}}</td>                         
                         <td>{{ $data->internasional }}</td>
                         <td>{{ $data->regional }}</td>
                         <td>{{ $data->nasional}}</td>                         
                         <td>{{ $data->wilayah }}</td>
                         <td>{{ $data->daerah }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>