<h1>Edit Data</h1>

<form action="/warga/{{$warga->id}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="name" placeholder="nama" value="{{$warga->name}}"><br>
    <input type="text" name="umur" placeholder="umur" value="{{$warga->umur}}"><br>
    <input type="text" name="asal" placeholder="asal" value="{{$warga->asal}}"><br>
    <textarea name="alamat_domisili" rows="10" value="{{$warga->alamat_domisili}}"></textarea><br>
    <button name='sumbit' value="save" type="submit">save</button>

</form>