@extends('layouts.app')

@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Bus</title>
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
<h2>Form Bus</h2>
<hr>
<form action="{{ isset($data)
             ?route('bus.update',["id" => $data->id])
             :route('bus.simpan') }}" method="POST">
  @csrf
<div class="form-group">
<label for="kodekaryawan">Kodekaryawan</label>
<input type="text" name="kodekaryawan" class="form-control"
    value={{ isset($data)?$data->kodekaryawan:"" }}>
</div>

<div class="form-action">
<label for="kelas">kelas</label>
<input type="text" name="kelas" class="form-control"
value={{ isset($data)?$data->kelas:"" }}>
</div>

<div class="form-action">
    <label for="nomorpol">Nomorpol</label>
    <input type="text" name="nomorpol" class="form-control"
    value={{ isset($data)?$data->nomorpol:"" }}>
    </div>

    <div class="form-action">
        <label for="driver">Driver</label>
        <input type="text" name="driver" class="form-control"
        value={{ isset($data)?$data->driver:"" }}>
        </div>

           <div class="form-action">
            <label for="kapasitaspenumpang">Kapasitaspenumpang</label>
            <input type="text" name="kapasitaspenumpang" class="form-control"
            value={{ isset($data)?$data->kapasitaspenumpang:"" }}>
            </div>
            


<br>
<input type="submit" value="simpan" class="btn btn-primary btn-block">
<br><br>

</form>
<table class="table table-bordered">
<thead>
<tr>
<th>Kodekaryawan</th>
<th>Kelas</th>
<th>Nomorpol</th>
<th>Driver</th>
<th>Kapasitaspenumpang</th>
<th colspan=2>Action</th>

</tr>
</thead>
<tbody>

  @foreach ($bus as $item)
  <tr>
    <td>{{ $item->kodekaryawan }}</td>
    <td>{{ $item->kelas }}</td>
    <td>{{ $item->nomorpol }}</td>
    <td>{{ $item->driver }}</td>
    <td>{{ $item->kapasitaspenumpang }}</td>
    <td><a href="{{ route('bus.tampil',["id" => $item->id]) }}"
      class="btn btn-warning btn-block">Rubah</a></td>
    <td><a href="{{ route('bus.hapus',["id" => $item->id]) }}"
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
