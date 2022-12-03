
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
 
  <div class="navbar">
    <nav class="navbar bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            CRUD LARAVEL
          </a>
        </div>
      </nav>
  </div>
  <div class="container">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <h1>TABEL TES</h1>

    <button type="button" class="btn btn-outline-success" ><a href="/warga/create">Tambah Data</a></button><br>

<table class="table table-bordered" >
    <tr>
        <th>Id</th>
        <th>nama</th>
        <th>umur</th>
        <th>asal</th>
        <th>alamat domisili</th>
        <th>Aksi</th>
    </tr>
    @foreach($Warga as $w)
        <tr>
            <td>{{$w->id}}</td>
            <td>{{$w->name}}</td>
            <td>{{$w->umur}}</td>
            <td>{{$w->asal}}</td>
            <td>{{$w->alamat_domisili}}</td>
            <td>
                <button type="button" class="btn btn-outline-primary" ><a href="/warga/{{$w->id}}/edit">Edit</a></button><br>

                <form action="warga/{{$w->id}}/destroy" method="POST">
                    @csrf
                    @method('delete')
                    <button type="sumbit"  value="Delete" class="btn btn-outline-danger">Danger</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</div>
  </body>
</html>

