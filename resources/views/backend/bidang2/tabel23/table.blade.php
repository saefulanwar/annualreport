<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</th>
                         <th>Luas Total</th>
                         <th>Sertifikat</th>
                         <th>Luas Sertifikat</th>
                         <th>Jumlah Lokasi</th>
                         <th>Luas Lokasi</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel23 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel23.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel23.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->tahun}}</td>                         
                         <td>{{ $data->luas_total }}</td>
                         <td>{{ $data->sertifikat }}</td>
                         <td>{{ $data->luas_sertifikat}}</td>                         
                         <td>{{ $data->jumlah_lokasi }}</td>
                         <td>{{ $data->luas_lokasi }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>