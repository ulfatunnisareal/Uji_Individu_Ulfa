@extends('app')

@section('content')
<h1 class="pt-2 ps-3">Employee | Detail Data</h1>
    <div class="px-4 py-0">
        <div class="card">
            <div class="card-header">
                <div class="card-title pt-2">
                    <h4>Detail Employee</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col px-5">
                        <!-- Display other employee details -->
                        <div class="row py-2">
                            <label class="fw-bold" for="nama">Nama :</label>
                            <p>{{ $employee->nama }}</p>
                        </div>
                        <div class="row py-2">
                            <label class="fw-bold" for="tgl_lahir">Tanggal Lahir :</label>
                            <p>{{ $employee->tgl_lahir }}</p>
                        </div>
                        <div class="row py-2">
                            <label class="fw-bold" for="telepon">Telepon:</label>
                            <p>{{ $employee->telepon }}</p>
                        </div>
                        <div class="row py-2">
                            <label class="fw-bold" for="gender">Gender:</label>
                            <p>{{ $employee->gender }}</p>
                        </div>
                        <div class="row py-2">
                            <label class="fw-bold" for="pendidikan">Pendidikan:</label>
                            <p>{{ $employee->pendidikan }}</p>
                        </div>
                        <div class="row py-2">
                            <label class="fw-bold" for="unit_kerja">Unit Kerja:</label>
                            <p>{{ $employee->unit_kerja }}</p>
                        </div>
                        <div class="row py-2">
                            <label class="fw-bold" for="jabatan">Jabatan:</label>
                            <p>{{ $employee->jabatan }}</p>
                        </div>
                    </div>
                    <div class="col px-5">
                        <div class="row py-2">
                            <label class="fw-bold" for="foto">Foto:</label>
                            <img src="{{ asset('storage/file/' . $employee->foto) }}" alt="Employee Photo"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="my-2">
                    <a href="{{ route('employee.index') }}" class="btn btn-danger"><i class="fa fa-backward"></i>
                        Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
