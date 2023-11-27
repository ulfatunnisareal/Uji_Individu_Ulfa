@extends('app')
@section('content')
<h1 class="pt-2 ps-3">Employee Data</h1>
    <div class="px-4 py-0">
        <div class="card">
            <div class="card-header">
                <div class="card-title pt-2">
                    <a href="{{ route('employee.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah
                        Data</a>
                </div>
            </div>
            <div class="card-body">
                @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table" id="listdata">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Telepon</th>
                                <th>Gender</th>
                                <th>Unit Kerja</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($query as $row)
                                <tr>
                                    <td>{{ $row->nama }}</td>
                                    <td>{{ $row->telepon }}</td>
                                    <td>{{ $row->gender }}</td>
                                    <td>{{ $row->unit_kerja }}</td>
                                    <td>{{ $row->jabatan }}</td>
                                    <td>
                                        <form action="{{ route('employee.destroy', $row->id) }}" method="post">
                                            <a class="btn btn-success btn-sm mx-1"
                                                href="{{ route('employee.show', $row->id) }}">
                                                <i class="fa fa-eye"></i>
                                            </a>&nbsp;
                                            <a class="btn btn-warning btn-sm mx-1"
                                                href="{{ route('employee.edit', $row->id) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>&nbsp;
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apakah yakin akan menghapus data ini?');">
                                                <i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
