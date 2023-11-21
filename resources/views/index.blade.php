<style>
    table {
        border-collapse: collapse; /* buat nggabungin batas antara cell tabel yang bersampingan, memiliki satu batas saja */
        width: 100%; /* biar panjang tabelnya full display di web dan interaktif  */
    }

    th, td {
        border: 1px solid black; /* garis disekelilingnya cell alias garis tabelnya */
        text-align: center; /* kataku sih ctrl+e nya word alias rata tengah */
        padding: 6px; /* ukuran cell dari tabelnya (besar kecilnya) */
    }

    th {
        background-color: #333;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:nth-child(odd) {
        background-color: #fff;
    }
</style>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIS</th>
            <th>Jenis Kelamin</th>
            <th>Fase Kelas</th>
            <th>Program Keahlian</th>
            <th>Alamat</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $siswa)
            <tr>
                <td>{{ $no == 0 }}</td>
                <td>{{ $siswa->nama }}</td>
                <td>{{ $siswa->nis }}</td>
                <td>{{ $siswa->jenis_kelamin }}</td>
                <td>{{ $siswa->fase_kelas }}</td>
                <td>{{ $siswa->program_keahlian }}</td>
                <td>{{ $siswa->alamat }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
