@extends('template')
@section('title', 'Tambah Data Belanja')
@section('konten')

    <div class="mb-4">
        <h3 class="fw-bold text-dark">Form Pembelian Barang Baru</h3>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white py-3">
            <h5 class="mb-0 fw-semibold">Silakan Isi Data Pembelian</h5>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('keranjang.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="KodeBarang" class="form-label fw-bold text-secondary">Kode Barang</label>
                    <input type="text" class="form-control form-control-lg fs-6" id="KodeBarang" name="KodeBarang"
                        placeholder="Masukkan angka kode barang" required>
                </div>

                <div class="mb-3">
                    <label for="Jumlah" class="form-label fw-bold text-secondary">Jumlah Pembelian</label>
                    <input type="text" class="form-control form-control-lg fs-6" id="Jumlah" name="Jumlah"
                        placeholder="Masukkan jumlah item" required>
                </div>

                <div class="mb-3">
                    <label for="Harga" class="form-label fw-bold text-secondary">Harga per Item</label>
                    <input type="text" class="form-control form-control-lg fs-6" id="Harga" name="Harga"
                        placeholder="Masukkan harga barang" required>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('keranjang.index') }}" class="btn btn-secondary px-4 py-2 fw-semibold">Kembali</a>
                    <button type="submit" class="btn btn-primary px-4 py-2 fw-bold">Beli</button>
                </div>
            </form>
        </div>
    </div>

@endsection
