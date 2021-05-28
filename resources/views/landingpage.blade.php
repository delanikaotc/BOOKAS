<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>BOOKAS</title>
  <!-- CSS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ url('/css/styles.css') }}">

</head>

<body>
  <div class="container-fluid">
    <div class="container-navbar">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{ url('/BOOKAS') }}"><img class="logo" src="img/Logo.png" alt=""><span class="ml-2">BOOKAS</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ml-4">
              <a class="nav-link" href="#">
                <p>Tentang</p>
              </a>
            </li>
            <li class="nav-item ml-2">
              <a class="nav-link" href="#">
                <p>Hubungi Kami</p>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/daftar') }}">
                <p>Daftar</p>
              </a>
            </li>
            <li class="nav-item ml-2">
              <a class="nav-link" href="{{ url('/masuk') }}">
                <p>Masuk</p>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <!--END Navbar-->
  <section class="section-content">
    <div class="container-navbar">
      <div class="row">
        <div class="col-6">
          <h1 class="title">ILMU PADA BUKU TIDAK AKAN BERUBAH WALAUPUN BEKAS
          </h1>
          <p class="text">Banyak buku-buku bekas yang masih sangat layak pakai. Apalagi untuk para mahasiswa yang sedang mencari buku-buku untuk referensi tugas atau skripsi. Cari buku bekasmu sekarang juga! Agar buku yang banyak ilmunya tidak terbuang!  </p>
          <a href="{{ url('/daftar') }}" class="btn btn-bookas">
            <p>MULAI CARI BUKU</p>
          </a>
        </div>
        <div class="col-6 ml-auto">
          <img src="img/bacabuku1.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <!--END Content-->

  <footer class="footer">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous ">
    </script>
    <script src="https://kit.fontawesome.com/9923874ec2.js " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous ">
    </script>
  </footer>
