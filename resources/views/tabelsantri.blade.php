<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tabel santri</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    .navbar {
      background-color: #FCFFFF;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    body {
      background-color: #2AE948;
    }
    .login-btn {
      margin-right: 10px;
    }
    .navbar img {
      max-height: 40px;
    }
  .sticky-footer {
    position: fixed;
    bottom: 1000px;
    width: 100%;
  }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
    <img src="{{ asset('image/LOGO-YAYASAN.png') }}" alt="Logo Yayasan" style="width: 45px; height: auto;">
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pendaftaran
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">pendaftaran</a></li>
              <li><a class="dropdown-item" href="#">pengumuman</a></li>
            </ul>
          <li class="nav-item">
            <a class="nav-link" href="#">seleksi pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Santri</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              perizinan
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Pengajuan</a></li>
              <li><a class="dropdown-item" href="#">setujui</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <a aria-expanded="false" style="display: inline-block;">
        <img src="{{ asset('image/LOGO-YAYASAN.png') }}" class="rounded-circle" style="width: 45px; " alt="...">
        <span style="margin-right: 10px;">Account</span>
      </a>
      <div class="login-btn">
      <a href="/login" class="btn btn-primary">Logout</a>
      </div>
    </div>
  </nav>
  <h1 class="text-left mb-5">Data santri ponpes</h1>

  <div class="container">
  <button type="button" class="btn btn-success">Tambah santri +</button>
    <div class="row">
    <table class="table">
  <thead class="table-dark">
  <tr>
      <th scope="col">No</th>
      <th scope="col">nis</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Kelas</th>
      <th scope="col">Gender</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>
      <button type="button" class="btn btn-info">edit</button>
      <button type="button" class="btn btn-danger">Hapus</button>
    </td>
    </tr>
  </tbody>
</table>
    </div>
  </div>

<div class="container mt-4">    
</div>
</div>

<div class="mt-auto" style="position: relative; top: 170px;">
    <footer class="footer py-3 bg-dark text-white" style="height: 250px;">
      <div class="container d-flex align-items-start justify-content-between">
        <img src="{{ asset('image/i01_image-removebg-preview-8.png') }}" class="card-img-top" alt="i01_image-removebg-preview-8" style="width: 200px; margin-top: 20px;">
        <div class="d-flex flex-column align-items-center">
          <img src="{{ asset('image/GoogleMaps-Icon-alone-1.webp') }}" alt="GoogleMaps-Icon-alone-1" style="width: 40px; margin-top: 40px;">
          <span>Jalan Simpang Gajah Mada 05 Banyuwangi</span>
          <span>Jawa Timur, Indonesia</span>
        </div>
        <div class="d-flex align-items-center">
          <div class="d-flex flex-column align-items-center">
            <img src="{{ asset('image/Instagram_logo_2022.svg.png') }}" alt="Instagram_logo_2022.svg" style="width: 36px; margin-right: 10px; margin-top: 74px;">
          </div>
          <div class="d-flex flex-column align-items-center">
          <p style="margin-top: 35px;">Temukan kami</p>
            <img src="{{ asset('image/Facebook_f_logo_(2019).svg.webp') }}" alt="Facebook_f_logo_(2019).svg" style="width: 36px; margin-right: 10px;">
          </div>
          <div class="d-flex flex-column align-items-center">
            <img src="{{ asset('image/twitter_logo_icon_186891.png') }}" alt="twitter_logo_icon_186891" style="width: 36px; margin-top: 74px; margin-right: 40px;">
          </div>
        </div>
      </div>
    </footer>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
