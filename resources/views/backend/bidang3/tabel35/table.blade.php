<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</td>
                         <th>Fakultas</th>
                         <th>Nama</th>
                         <th>Jenjang</td>
                         <th>Peringkat</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel35 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel35.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel35.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->tahun}}</td>                         
                         <td>{{ $data->fakultas }}</td>
                         <td>{{ $data->nama }}</td>
                         <td>{{ $data->jenjang}}</td>                         
                         <td>{{ $data->peringkat }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>