@extends('template')
@section('title', 'Tambah Data Teh')
@section('konten')

    <a href="{{ route('teh.index') }}" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Teh
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

            <form action="{{ route('teh.store') }}" method="POST" onsubmit="return validasiForm()">
                @csrf

                <div class="row mb-3">
                    <label for="merkteh" class="col-sm-2 col-form-label">Merk Teh</label>
                    <div class="col-sm-10">
                        <input type="text" name="merkteh" id="merkteh" class="form-control" maxlength="30"
                            value="{{ old('merkteh') }}" placeholder="Masukkan Merk Teh">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stockteh" class="col-sm-2 col-form-label">Stock Teh</label>
                    <div class="col-sm-10">
                        <input type="number" name="stockteh" id="stockteh" class="form-control" min="0"
                            value="{{ old('stockteh') }}" placeholder="Masukkan jumlah stock">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-select">
                            <option value="">-- Pilih --</option>
                            <option value="Y" {{ old('tersedia') == 'Y' ? 'selected' : '' }}>Ya</option>
                            <option value="N" {{ old('tersedia') == 'N' ? 'selected' : '' }}>Tidak</option>
                        </select>
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
            let merkteh = document.getElementById('merkteh').value.trim();
            let stockteh = document.getElementById('stockteh').value.trim();
            let tersedia = document.getElementById('tersedia').value;

            if (merkteh === '') {
                Swal.fire({
                    title: "Kesalahan!",
                    text: "Merk Teh wajib diisi",
                    icon: "error"
                });
                return false;
            }
            if (stockteh === '') {
                Swal.fire({
                    title: "Kesalahan!",
                    text: "Stock Teh wajib diisi",
                    icon: "error"
                });
                return false;
            }
            if (tersedia === '') {
                Swal.fire({
                    title: "Kesalahan!",
                    text: "Tersedia wajib dipilih",
                    icon: "error"
                });
                return false;
            }
            return true;
        }
    </script>
@endsection
