@extends('template')
@section('title', 'Kode Soal Penggajian')
@section('konten')

    <a href="{{ route('eas.index') }}" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Penggajian
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('eas.store') }}" method="POST" onsubmit="return validasiForm()">
                @csrf

                <div class="row mb-3">
                    <label for="NRP" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-10">
                        <input type="text" name="NIP" id="NIP" class="form-control" maxlength="8"
                            value="{{ old('NIP') }}" placeholder="Masukkan NIP">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="NilaiAngka" class="col-sm-2 col-form-label">Gaji Pokok</label>
                    <div class="col-sm-10">
                        <input type="number" name="gajipokok" id="gajipokok" class="form-control"
                            placeholder="Masukkan Gaji Pokok" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="SKS" class="col-sm-2 col-form-label">Potongan</label>
                    <div class="col-sm-10">
                        <input type="number" name="potongan" id="potongan" class="form-control"
                            placeholder="Masukkan potongan" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <script>
        function validasiForm() {
            let NIP = document.getElementById('NIP').value.trim();

            if (NIP === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "NIP wajib diisi",
                    icon: "error"
                });
                return false;
            }
            return true;
        }
    </script>
@endsection
