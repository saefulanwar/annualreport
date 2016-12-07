<table class="table table-bordered">
                     <thead>
                       <tr>
                         <th width="80">Action</td>
                         <th>Perguruan TInggi</td>
                         <th>Tahun</td>
                         <th>Emas</th>
                         <th>Perak</th>
                         <th>Perunggu</td>
                         <th>Harapan I</th>
                         <th>Harapan II</th>
                         <th>Harapan III</th>
                         <th>Favorit</th>
                       </tr>
                     </thead>
                     <tbody>

                      @foreach($tabel34 as $data)
                      <tr>
                        <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['tabel34.destroy', $data->id]]) !!}
                                  <a href="{{ route('tabel34.edit', $data->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                        </td>
                        <td>{{ $data->pt}}</td>
                         <td>{{ $data->tahun}}</td>                         
                         <td>{{ $data->emas}}</td>
                         <td>{{ $data->perak }}</td>
                         <td>{{ $data->perunggu}}</td>                         
                         <td>{{ $data->h1}}</td>
                         <td>{{ $data->h2}}</td>
                         <td>{{ $data->h3}}</td>
                         <td>{{ $data->fav}}</td> 
                       </tr>
                      @endforeach
                       
                     </tbody>
                   </table>