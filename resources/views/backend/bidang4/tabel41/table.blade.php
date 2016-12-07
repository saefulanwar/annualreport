<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Kegiatan</td>
                         <th>Waktu</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel41 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel41.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel41.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->kegiatan}}</td>                         
                         <td>{{ $data->waktu }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>