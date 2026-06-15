@extends('template')
@section('title', 'Kode Soal Penggajian')
@section('konten')

    <h2>Daftar Penggajian</h2>

    <a href="{{ route('eas.create') }}" class="btn btn-primary">Tambah Data</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr class="bg-primary text-white">
            <th>NIP</th>
            <th>Gaji Pokok</th>
            <th>Potongan</th>
            <th>Gaji Bersih</th>
            <th>Persentase Potongan</th>
        </tr>

        @forelse($eas as $item)
            @php
                $gajibersih = $item->gajipokok - $item->potongan;
                $persentase = ($gajibersih / $item->gajipokok) * 100;
            @endphp
            <tr>
                <td>{{ $item->NIP }}</td>
                <td>{{ $item->gajipokok }}</td>
                <td>{{ $item->potongan }}</td>

                <td>{{ number_format($gajibersih, 0, ',', '.') }}</td>
                <td>{{ number_format($persentase) }} %</td>

            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">Belum ada data Penggajian.</td>
            </tr>
        @endforelse
    </table>
@endsection
