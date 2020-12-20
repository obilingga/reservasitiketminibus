@extends('layouts.app')

@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet"
     integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: mediumblue">
    <div class="container-fluid">
      <a class="navbar-brand" href="home">Pelanggan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="bus">Bus</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="pemesanan">Pemesanan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="karyawan">Karyawan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="keberangkatan">Keberangkatan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="pembayaran">Pembayaran</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <nav class="navbar navbar-dark bg-dark">
    <!-- Navbar content -->
  </nav>
  
  <nav class="navbar navbar-dark bg-primary">
    <!-- Navbar content -->
  </nav>
  
  <nav class="navbar navbar-light" style="background-color: #e5e3fd;">
    <!-- Navbar content -->
  </nav>


    
<div class="container">

    
<h2>Form Pelanggan</h2>
<hr>
<form action="{{ isset($data)
  ?route('home.update',["id" => $data->id])
  :route('pelanggan.simpan') }}" method="POST">
    @csrf
<div class="form-group">
<label for="kodepelanggan">Kodepelanggan</label>
<input type="text" name="kodepelanggan" class="form-control"
value={{ isset($data)?$data->kodepelanggan:"" }}>

</div>

<div class="form-action">
<label for="noktp">Noktp</label>
<input type="text" name="noktp" class="form-control"
value={{ isset($data)?$data->noktp:"" }}>

</div>

<div class="form-action">
<label for="namapelanggan">Namapelanggan</label>
<input type="text" name="namapelanggan" class="form-control"
value={{ isset($data)?$data->namapelanggan:"" }}>

</div>

<div class="form-action">
<label for="jeniskelamin">Jeniskelamin</label>
<input type="text" name="jeniskelamin" class="form-control"
value={{ isset($data)?$data->jeniskelamin:"" }}>

</div>

<div class="form-action">
<label for="alamatpelanggan">Alamatpelanggan</label>
<input type="text" name="alamatpelanggan" class="form-control"
value={{ isset($data)?$data->alamatpelanggan:"" }}>

</div>

<div class="form-action">
<label for="nomortelp">Nomortelp</label>
<input type="text" name="nomortelp" class="form-control"
value={{ isset($data)?$data->nomortelp:"" }}>

</div>

<div class="form-action">
<label for="email">Email</label>
<input type="text" name="email" class="form-control"
value={{ isset($data)?$data->email:"" }}>

</div>
<br>
<input type="submit" value="simpan" class="btn btn-primary btn-block">
<br><br>

</form>
<table class="table table-bordered">
<thead>
<tr>
<th>Kodepelanggan</th>
<th>Noktp</th>
<th>Namapelanggan</th>
<th>Jeniskelamin</th>
<th>Alamatpelanggan</th>
<th>Nomortelp</th>
<th>Email</th>
<th colspan=2>Action</th>

</tr>
</thead>
<tbody>

  @foreach ($home as $item)
      
 
<tr>
    <td>{{ $item->kodepelanggan }}</td>
    <td>{{ $item->noktp }}</td>
    <td>{{ $item->namapelanggan }}</td>
    <td>{{ $item->jeniskelamin }}</td>
    <td>{{ $item->alamatpelanggan }}</td>
    <td>{{ $item->nomortelp }}</td>
    <td>{{ $item->email }}</td>
    <td><a href="{{ route('home.tampil',["id" => $item->id]) }}"
      class="btn btn-warning btn-block">Rubah</a></td>
    <td><a href="{{ route('home.hapus',["id" => $item->id]) }}"
      class="btn btn-danger btn-block">Hapus</a></td>
    </tr>

    @endforeach


</tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">CopyRight@ObiLingga</span>
  </div>
</nav>

</body>
</html>
@endsection
