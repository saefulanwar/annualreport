<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Tahun</td>
                         <th>Jumlah Mahasiswa Baru (Non PKS)</th>
                         <th>Jumlah Mahasiswa Baru Peserta Pelatihan TIK</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel15 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel15.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel15.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                         <td>{{ $data->tahun }}</td>
                         <td>{{ $data->nonpks }}</td>
                         <td>{{ $data->mabatik }}</td>
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>