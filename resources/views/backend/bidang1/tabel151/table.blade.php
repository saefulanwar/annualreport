<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Program</td>
                         <th>Waktu</th>
                         <th>Peserta</th>
                         <th>Hasil</th>
                         <th>Tahun</td>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel151 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel151.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel151.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->program}}</td>                         
                         <td>{{ $data->waktu }}</td>
                         <td>{{ $data->peserta }}</td>
                         <td>{{ $data->hasil }}</td>
                         <td>{{ $data->tahun}}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>