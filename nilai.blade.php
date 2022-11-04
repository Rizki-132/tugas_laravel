<h3 align="center"> Daftar Nilai Mahasiswa</h3>
<table border="1" align="center" cellpading="1" >
    <thead>
        @foreach ($judul as $jdl)
        <th>{{ $jdl }}</th>
        @endforeach
    </thead>
    <tbody>
        @foreach ($siswa as $mhs)
            @php
                $ket = ($mhs['nilai'] > 60 ? 'Lulus' : 'Gagal');
                $warna =($no % 2 == 1) ? 'blue' : 'yellow';
            @endphp
         <tr bgcolor="{{ $warna }}">
            <td>{{ $no++}}</td>
            <td>{{ $mhs['nama'] }}</td>
            <td>{{ $mhs['nilai'] }}</td>
            <td>{{ $ket }}</td>
         </tr>
        @endforeach
    </tbody>
</table>