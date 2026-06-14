@extends('template')
@section('title', 'Daftar Teh')
@section('konten')

    <h2>Daftar Teh</h2>

    <a href="{{ route('teh.create') }}" class="btn btn-primary">Tambah Data</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr class="bg-primary text-white">
            <th>Kode Teh</th>
            <th>Merk Teh</th>
            <th>Stock Teh</th>
            <th>Tersedia</th>
            <th>Aksi</th>
        </tr>

        @forelse($teh as $item)
            <tr>
                <td>{{ $item->kodeteh }}</td>
                <td>{{ $item->merkteh }}</td>
                <td>{{ $item->stockteh }}</td>
                <td>
                    @if ($item->tersedia == 'Y')
                        <span class="badge bg-success">Ya</span>
                    @else
                        <span class="badge bg-danger">Tidak</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('teh.edit', $item->kodeteh) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('teh.destroy', $item->kodeteh) }}" method="POST" style="display:inline;"
                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">Belum ada data teh.</td>
            </tr>
        @endforelse
    </table>
@endsection
