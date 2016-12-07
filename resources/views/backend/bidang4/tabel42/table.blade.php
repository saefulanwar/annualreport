<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Pelaksana Kegiatan</td>
                         <th>Nama Kegiatan</th>
                         <th>Tamu Undangan</th>
                         <th>Negara Asal</td>
                         <th>Tanggal Pelaksanaan</th>
                         <th>Peserta Kegiatan</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel42 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel42.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel42.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->pelaksana_kegiatan}}</td>                         
                         <td>{{ $data->nama_kegiatan }}</td>
                         <td>{{ $data->tamu }}</td>
                         <td>{{ $data->negara}}</td>                         
                         <td>{{ $data->tanggal }}</td>
                         <td>{{ $data->peserta }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>