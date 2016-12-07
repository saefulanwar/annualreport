<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Nama</td>
                         <th>Unit</th>
                         <th>Tanggal</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel185 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel185.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel185.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->nama}}</td>                         
                         <td>{{ $data->unit }}</td>
                         <td>{{ $data->tanggal }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>