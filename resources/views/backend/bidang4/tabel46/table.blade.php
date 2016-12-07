<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Peserta</td>
                         <th>Tanggal Pelaksanaan</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel46 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel46.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel46.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->peserta}}</td>                         
                         <td>{{ $data->tanggal_pelaksanaan }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>