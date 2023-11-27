@extends('app')

@section('content')
    <h1 class="ps-3 pt-2">Employee | Edit Data</h1>
    <div class="px-4 py-0">
        <div class="card">
            <div class="card-header">
                <div class="card-title pt-2">
                    <h4>Edit Data Employee</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('employee.update', $employee->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <p><b>Kolom bertanda <span class="text-danger">*</span> tidak boleh kosong</b></p>
                    <div class="row">
                        <div class="col px-5">
                            <div class="row py-2">
                                <label class="fw-bold" for="">Nama <span class="text-danger">*</span></label>
                                <input type="text" name="nama"
                                    class="form-control @if ($errors->has('nama')) is-invalid @endif"
                                    placeholder="Masukkan Nama" value="{{ old('nama', $employee->nama) }}">
                                @if ($errors->has('nama'))
                                    <small class="text-danger">
                                        {{ $errors->first('nama') }}
                                    </small>
                                @endif
                            </div>
                            <div class="row py-2">
                                <label class="fw-bold" for="">Telepon <span class="text-danger">*</span></label>
                                <input type="text" name="telepon"
                                    class="form-control @if ($errors->has('telepon')) is-invalid @endif"
                                    placeholder="Masukkan No Telepon" value="{{ old('telepon', $employee->telepon) }}">
                                @if ($errors->has('telepon'))
                                    <small class="text-danger">
                                        {{ $errors->first('telepon') }}
                                    </small>
                                @endif
                            </div>
                            <div class="row py-2">
                                <label class="fw-bold" for="pendidikan">Pendidikan <span class="text-danger">*</span></label>
                                <select name="pendidikan"
                                    class="form-control @if ($errors->has('pendidikan')) is-invalid @endif">
                                    <option value="" selected disabled>-- Pilih Pendidikan --</option>
                                    <option value="S3"
                                        {{ old('pendidikan', $employee->pendidikan) == 'S3' ? 'selected' : '' }}>
                                        S3 | Doktoral</option>
                                    <option value="S2"
                                        {{ old('pendidikan', $employee->pendidikan) == 'S2' ? 'selected' : '' }}>
                                        S2 | Strata 2</option>
                                    <option value="S1"
                                        {{ old('pendidikan', $employee->pendidikan) == 'S1' ? 'selected' : '' }}>
                                        S1 | Strata 1</option>
                                    <option value="D4"
                                        {{ old('pendidikan', $employee->pendidikan) == 'D4' ? 'selected' : '' }}>
                                        D4 | Diploma IV</option>
                                    <option value="D3"
                                        {{ old('pendidikan', $employee->pendidikan) == 'D3' ? 'selected' : '' }}>
                                        D3 | Diploma III</option>
                                </select>

                                @if ($errors->has('pendidikan'))
                                    <small class="text-danger">
                                        {{ $errors->first('pendidikan') }}
                                    </small>
                                @endif
                            </div>
                            <div class="row py-2">
                                <label class="fw-bold" for="">Jabatan <span class="text-danger">*</span></label>
                                <input type="text" name="jabatan"
                                    class="form-control @if ($errors->has('jabatan')) is-invalid @endif"
                                    placeholder="Masukkan Jabatan" value="{{ old('jabatan', $employee->jabatan) }}">
                                @if ($errors->has('jabatan'))
                                    <small class="text-danger">
                                        {{ $errors->first('jabatan') }}
                                    </small>
                                @endif
                            </div>
                        </div>
                        <div class="col px-5">
                            <div class="row py-2">
                                <label class="fw-bold" for="">Tgl. Lahir <span class="text-danger">*</span></label>
                                <input type="date" name="tgl_lahir"
                                    class="form-control @if ($errors->has('tgl_lahir')) is-invalid @endif"
                                    placeholder="Masukkan Tgl. Lahir" value="{{ old('tgl_lahir', $employee->tgl_lahir) }}">
                                @if ($errors->has('tgl_lahir'))
                                    <small class="text-danger">
                                        {{ $errors->first('tgl_lahir') }}
                                    </small>
                                @endif
                            </div>
                            <div class="row py-2">
                                <label class="fw-bold" for="gender">Gender <span class="text-danger">*</span></label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="male"
                                            value="M" {{ old('gender', $employee->gender) == 'M' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="female"
                                            value="F" {{ old('gender', $employee->gender) == 'F' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                </div>
                                @if ($errors->has('gender'))
                                    <small class="text-danger">
                                        {{ $errors->first('gender') }}
                                    </small>
                                @endif
                            </div>
                            <div class="row py-2">
                                <label class="fw-bold" for="unit_kerja">Unit Kerja <span class="text-danger">*</span></label>
                                <select name="unit_kerja"
                                    class="form-control @if ($errors->has('unit_kerja')) is-invalid @endif">
                                    <!-- Add an option for the default/placeholder value -->
                                    <option value="" selected disabled>-- Pilih Unit Kerja --</option>

                                    <!-- Add options for different units -->
                                    <option value="SDM"
                                        {{ old('unit_kerja', $employee->unit_kerja) == 'SDM' ? 'selected' : '' }}>
                                        SDM</option>
                                    <option value="Pemasaran"
                                        {{ old('unit_kerja', $employee->unit_kerja) == 'Pemasaran' ? 'selected' : '' }}>
                                        Pemasaran</option>
                                    <option value="Operasional"
                                        {{ old('unit_kerja', $employee->unit_kerja) == 'Operasional' ? 'selected' : '' }}>
                                        Operasional</option>
                                    <option value="TI"
                                        {{ old('unit_kerja', $employee->unit_kerja) == 'TI' ? 'selected' : '' }}>
                                        TI</option>
                                    <!-- Add more options as needed -->
                                </select>

                                @if ($errors->has('unit_kerja'))
                                    <small class="text-danger">
                                        {{ $errors->first('unit_kerja') }}
                                    </small>
                                @endif
                            </div>
                            <div class="row py-2">
                                <label class="fw-bold" for="">Foto <span class="text-danger">*</span></label>
                                <input type="file" name="foto"
                                    class="form-control @if ($errors->has('foto')) is-invalid @endif"
                                    placeholder="Pilih foto" value="{{ old('foto') }}">
                                <small>Tipe Foto : JPG/JPEG/PNG. Max : 10 MB.</small>
                                @if ($errors->has('foto'))
                                    <br>
                                    <small class="text-danger">
                                        {{ $errors->first('foto') }}
                                    </small>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <label class="fw-bold" for="foto">Foto Tersimpan :</label>
                        <img style="width: 25%" src="{{ asset('storage/file/' . $employee->foto) }}" alt="Employee Photo"
                            class="img-fluid">
                    </div>
            </div>
            <div class="card-footer">
                <div class="my-2">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Update Data</button>
                    <a href="{{ route('employee.index') }}" class="btn btn-danger"><i class="fa fa-backward"></i>
                        Kembali</a>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
