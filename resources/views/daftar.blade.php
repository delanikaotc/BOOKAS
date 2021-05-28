<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>DAFTAR BOOKAS</title>
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
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <!-- <a class="nav-link" href="#"><p>Tentang</p></a> -->
                  </li>
                <li class="nav-item ml-2">
                  <!-- <a class="nav-link" href="#"><p>Hubungi Kami</p></a> -->
                </li>
              </ul>
            </div>
          </nav>
      </div>
    </div>
    <!--END Navbar-->
    <section class="section-register">
        <div class="container-navbar">
            <div class="row">
                <div class="col-5">
                    <div class="card">
                        <form class="px-4 py-3" action="{{ url('/daftar') }}" method="post">
                            @csrf
                            <h1>Daftar</h1>
                            <section class="form-daftar">
                                @include("alert.alert")
                                <div class="form-group">
                                    <label for="exampleDropdownFormEmail1">Email:</label>
                                    <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleDropdownFormEmail1">Nama:</label>
                                      <input type="text" name="name" class="form-control" id="exampleDropdownFormEmail1" placeholder="nama">
                                    </div>
                                  <div class="form-group">
                                    <label for="exampleDropdownFormPassword1">Kata sandi:</label>
                                    <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                                  </div>
                                <input type="hidden" name="role_id" value="2">
                                <button href="{{ url('/home') }}" type="submit" class="btn btn-bookas"><p>Daftar</p></button>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('/masuk') }}"><p class="oren">Sudah punya akun? Masuk</p></a>
                            </section>
                        </form>
                    </div>
                </div>
                <div class="col-6 ml-auto">
                    <img class="bacabuku1" src="img/bacabuku1.png" alt="">
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
