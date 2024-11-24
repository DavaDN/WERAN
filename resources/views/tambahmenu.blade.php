@extends('master')

@section('konten')
<h3>Form Input Menu</h3>
<form action="{{route('simpanMenu')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="gambar">Gambar</label>
    <input type="file" accept="image/png, image/jpeg, image/jpg" name="gambar">
  </div>
  <div class="form-group">
    <label>Nama Menu</label>
    <input type="text" name="nama" class="form-control" placeholder="Nama menu" required="">
  </div>
  <div class="form-group">
    <label>Jenis</label>
    <br>
    <select name="jenis" id="jenis">
      <option value="Makanan">Makanan</option>
      <option value="Minuman">Minuman</option>
  </select>
  </div>
  <div class="form-group">
    <label>Harga</label>
    <input type="number" name="harga" class="form-control" placeholder="Harga" required="">
  </div>

  <div class="form-group text-right">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
  </div>
</form>
@endsection