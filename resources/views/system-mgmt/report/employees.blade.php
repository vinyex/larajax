<table>
    <thead>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Pendidikan Terakhir</th>
            <th>Alamat</th>
            <th>No Ponsel</th>
            <th>Tanggal Lahir</th>
            <th>Bergabung Sejak</th>
        </tr>
    </thead>
    <tbody>
    @php $no = 1 @endphp
    @foreach($employees as $employee)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $employee->nik }}</td>
            <td>{{ $employee->nama_lengkap }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->jenis_kelamin }}</td>
            <td>{{ $employee->pendidikan }}</td>
            <td>{{ $employee->alamat_ktp }}</td>
            <td>{{ $employee->nohp_pribadi }}</td>
            <td>{{ $employee->birthdate }}</td>
            <td>{{ $employee->date_hired }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
