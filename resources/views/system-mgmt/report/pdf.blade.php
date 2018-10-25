 <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
      table {
        border-collapse: collapse;
        width: 100%;
      }
      td, th {
        border: solid 2px;
        padding: 10px 5px;
      }
      tr {
        text-align: center;
      }
      .container {
        width: 100%;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="container">
        <div><h2>Daftar Pegawai mulai {{$searchingVals['from']}} sampai {{$searchingVals['to']}}</h2></div>
       <table id="example2" role="grid">
            <thead>
              <tr role="row">
                <th width="10%">NIK</th>
                <th width="10%">Nama</th>
                <th width="20%">Alamat</th>
                <th width="15%">Tanggal Lahir</th>
                <th width="15%">Tanggal Bergabung</th>
                <th width="10%">Divisi</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($employees as $employee)
                <tr role="row" class="odd">
                  <td>{{ $employee['nik'] }}</td>
                  <td>{{ $employee['nama_lengkap'] }}</td>
                  <td>{{ $employee['alamat_ktp'] }}</td>
                  <td>{{ $employee['birthdate'] }}</td>
                  <td>{{ $employee['date_hired'] }}</td>
                  <td>{{ $employee['division_name'] }}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
  </body>
</html>
