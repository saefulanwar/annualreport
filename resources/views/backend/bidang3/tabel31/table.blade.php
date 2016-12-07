<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</th>
                         <th>Penalaran</td>
                         <th>Seni</th>
                         <th>Khusus</th>
                         <th>Olahraga</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel31 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel31.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel31.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->tahun}}</td>                         
                         <td>{{ $data->penalaran }}</td>
                         <td>{{ $data->seni }}</td>
                         <td>{{ $data->khusus }}</td>
                         <td>{{ $data->olahraga }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>