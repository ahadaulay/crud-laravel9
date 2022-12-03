<h1>Tambah Data</h1>
{{-- tes update --}}
<form action="/warga/store" method="POST">
    @csrf
    <input type="text" name="name" placeholder="nama"><br>
    <input type="text" name="umur" placeholder="umur"><br>
    <input type="text" name="asal" placeholder="asal"><br>
    <textarea name="alamat_domisili" rows="10"></textarea><br>
    <button name='sumbit' value="save" type="submit">save</button>

</form>