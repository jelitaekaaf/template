
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">Data Siswa</div>

                <div class="card-body">
                    <a href="{{route('siswa.create')}}" class="btn btn-primary">Add Data</a>                           
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name Siswa</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Action</th>
                          </tr>
                          </thead>
                          <tbody>
                            @php    $no = 1; @endphp
                            @foreach ($siswa as $data)
                          <tr>
                            <th scope="row">{{$no++}}</th>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->kelas}}</td>
                            <form action="{{route('siswa.destroy', $data->id)}}" method="POST">
                            @csrf
                            @method('DELETE')  
                            <td>
                                <a href="{{route('siswa.edit', $data->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{route('siswa.show', $data->id)}}" class="btn btn-warning ">Show</a>
                                <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                Delete
                            </button>
                              </td>
                            </form>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



