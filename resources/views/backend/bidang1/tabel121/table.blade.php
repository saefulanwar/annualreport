<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</td>
                         <th>Nama</th>
                         <th>Bidang</th>
                         <th>Institusi</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel121 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel121.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel121.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->tahun }}</td>                         
                         <td>{{ $data->nama }}</td>
                         <td>{{ $data->bidang }}</td>
                         <td>{{ $data->institusi }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>