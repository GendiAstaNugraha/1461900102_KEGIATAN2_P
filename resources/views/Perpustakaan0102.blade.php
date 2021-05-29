<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Pratikum_2</title>
  </head>
  <body>
    <div>
      <table>
        <thead>
          <tr>
            <th>Kode_Kategori</th>
            <th>Nama_kategori</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($perpustakaan as $perpus)
          <tr>
            <td>{{$perpus->kode_kategori}}</td>
            <td>{{$perpus->nama_kategori}}</td>
          </tr>
          @andforeach
        </tbody>
      </table>
    </div>
  </body>
</html>