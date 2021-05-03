<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Pesananku</title>
        <!-- CSS -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="css/pengguna.css">
    
    </head>

<body>
    <div class="container-fluid">
    <div class="container-navbar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ url('/home') }}"><img class="logo" src="img/Logo.png" alt=""><span class="ml-2">BOOKAS</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <div class="search">
                  <ul class="navbar-nav mr-auto">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <input class="btn btn-bookas my-2 my-sm-0" type="submit" value="">
                      </form>
                  </ul>
                  </div>
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <div class="dropdown">
                        <a class="nav-link dropdown-toggle dropdowntext" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#EA6941">
                          Kategori
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">Pengetahuan</a>
                          <a class="dropdown-item" href="#">Teknologi</a>
                          <a class="dropdown-item" href="#">Hukum</a>
                          <a class="dropdown-item" href="#">Memasak</a>
                          <a class="dropdown-item" href="#">Bisnis</a>
                        </div>
                      </div>
                      </li>
                      <li class="nav-item ml-4">
                        <!-- <a class="nav-link" href="{{ url('keranjang') }}"><i class="bi bi-handbag-fill" href="#"></i></a> -->
                        <a class="nav-link" href="{{ url('keranjang') }}"><i class="bi bi-handbag-fill" style="font-size: 20px; color: #ffffff;"></i></i></a>
                      </li>
                    <li class="nav-item ml-2">
                      <a class="nav-link" href="{{ url('profile') }}"><p>User10</p></a>
                    </li>
                  </ul>
                </div>
              </nav>
          </div>
        </div>
    <!--END Navbar-->
    <div class="section-user">
      <div class="container-user">
        <div class="row">
          <div class="col-3">
            <div class="card">
              <a href="{{ url('/profile') }}" style="color: #212121;" ><i class="bi bi-person-circle"></i> Alvina Vania</a>
              <button class="btn-bookas">
              <a href="#" style="color: #FFFFFF;" ><i class="bi bi-clipboard" ></i>  Pesanan</a>
              </button>
              <a href="{{ url('/produk') }}" style="color: #212121;"><i class="bi bi-journal" ></i>  Produk</a>
              <a href="{{ url('/penjualan') }}" style="color: #212121;"><i class="bi bi-file-earmark-bar-graph" ></i>  Penjualan</a>
              <a href="{{ url('/penghasilan') }}" style="color: #212121;"><i class="bi bi-cash-stack" ></i>  Penghasilan</a>
              <a href="#" style="color: #EA6941;"><i class="bi bi-box-arrow-right"></i>  Keluar</a>
            </div>
          </div>
        <!-- END sidebar -->


          <div class="col-9">
            <div class="card">
              <div class="card-cont">
                  <h1>Pesanan Saya</h1>
                  <div class="dropdown-divider"></div>
                  <a class="btn btn-bookas"><p>Semua</p></a>
                </div>
            </div>
            <!-- LANJUT -->
            <div class="card-item">
                <div class="card">
                    <div class="card-cont">
                        <div class="row">
                            <div class="col-4">
                            <h5 href="#"><i class="bi bi-person-circle"></i> Tika Store</h5>
                            </div>
                            <div class="col-6"></div>
                            <div class="col-2">
                                <h5>SELESAI</h5>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-2">
                                <img class="book-cover" src="img/buku5.png" alt="" href="#">
                            </div>
                            <div class="col-8">
                                <h5>Wingit</h5>
                                <p>Kondisi Buku</p>
                            </div>
                            <div class="col-2">
                                <p>Rp. 50.000 </p>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-4">
                                <h5>Total Pesanan</h5>
                            </div>
                            <div class="col-6"></div>
                            <div class="col-2">
                                <h5>Rp. 50.000</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Lanjut -->
            <div class="card-item">
                <div class="card">
                    <div class="card-cont">
                        <div class="row">
                            <div class="col-4">
                            <h5 href="#"><i class="bi bi-person-circle"></i> Tika Store</h5>
                            </div>
                            <div class="col-6"></div>
                            <div class="col-2">
                                <h5>SELESAI</h5>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-2">
                                <img class="book-cover" src="img/buku5.png" alt="" href="#">
                            </div>
                            <div class="col-8">
                                <h5>Wingit</h5>
                                <p>Kondisi Buku</p>
                            </div>
                            <div class="col-2">
                                <p>Rp. 50.000 </p>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-4">
                                <h5>Total Pesanan</h5>
                            </div>
                            <div class="col-6"></div>
                            <div class="col-2">
                                <h5>Rp. 50.000</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          </div>
        </div>
      </div>
    </div>   
    <!--END sidebar-->
    

<footer class="footer">
  <div class="dropdown-divider"></div>
  <div class="container">
    <div class="row">
        <div class="col-5">
            <h1 class="oren">BOOKAS</h1>
        </div>

        <div class="col-2">
            <h5>For Beginners</h5>
            <a href="">New Account</a> <br>
            <a href="">Booking Now</a><br>
            <a href="">Use Payments</a>
        </div>

        <div class="col-2">
            <h5>Explore Us</h5>
            <a href="">Our Careers</a><br>
            <a href="">Privacy</a><br>
            <a href="">Terms & Conditions</a>
        </div>

        <div class="col-2">
            <h5>Connect Us</h5>
            <a href="">support@BOOKAS.id</a><br>
            <a href="">022 - 5673 - 431</a><br>
            <a href="">Staycation, Kuningan Jakarta</a>
        </div>
    </div>
    <div class="text-center mb-3">
        <p>Copyright 2021 • All right reserved • BOOKAS</p>
    </div>
</div>
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous ">
    </script>
    <script src="https://kit.fontawesome.com/9923874ec2.js " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous ">
    </script>
    
</footer>


