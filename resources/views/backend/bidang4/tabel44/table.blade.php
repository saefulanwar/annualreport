<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Pelaksana Kegiatan</td>
                         <th>Guest Lecture</th>
                         <th>Asal Guest Lecture</th>
                         <th>Tanggal Pelaksanaan</td>
                         <th>Materi Perkuiahan</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel44 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel44.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel44.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->pelaksana_kegiatan}}</td>                         
                         <td>{{ $data->guest_lecture }}</td>
                         <td>{{ $data->asal }}</td>
                         <td>{{ $data->tanggal_pelaksanaan}}</td>                         
                         <td>{{ $data->materi }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>