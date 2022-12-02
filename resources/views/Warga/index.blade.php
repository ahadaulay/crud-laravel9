<h1>TABEL TES</h1>

<table border="1">
    <tr>
        <th>Id</th>
        <th>nama</th>
        <th>umur</th>
        <th>asal</th>
        <th>alamat domisili</th>
    </tr>
    @foreach($Warga as $w)
        <tr>
            <td>{{$w->id}}</td>
            <td>{{$w->name}}</td>
            <td>{{$w->umur}}</td>
            <td>{{$w->asal}}</td>
            <td>{{$w->alamat_domisili}}</td>
        </tr>
    @endforeach
</table>