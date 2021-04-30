<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>BOOKAS</title>
    <!-- CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>

<body>
    <div class="container-fluid">
        <div class="container-navbar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img class="logo" src="img/Logo.png" alt=""><span class="ml-2">BOOKAS</span></a>
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
                      <a class="nav-link" href="#"><p>User10</p></a>
                    </li>
                  </ul>
                </div>
              </nav>
          </div>
        </div>
    <!--END Navbar-->

    <div class="section-topbar">
        <div class="container-navbar">
            <div class="row">
              <ul class="navbar-nav ">
                <li class="nav-item ml-4">
                  <a class="nav-link" href="#"><p>Book</p></a>
                </li>
            </ul>
            <ul class="navbar-nav ">
              <li class="nav-item ml-4">
                <a class="nav-link" href="#"><p>Magazine</p></a>
              </li>
            </ul>
            <ul class="navbar-nav ">
              <li class="nav-item ml-4">
                <a class="nav-link" href="#"><p>Brain Storming</p></a>
              </li>
          </ul>
            </div>
        </div>
    </div>

    <!--END Topbar-->

    <div class="section-banner">
        <div class="row">
            <img src="img/bacabuku2.png" alt="">
        </div>
    </div>
    <!--END Banner-->

    <div class="section-midcontent">
        <div class="container-navbar">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                      <h1 class="oren">SERBA Rp. 40.000!</h1>
                      <div class="section-carddalam">
                        <div class="row">
                          <div class="col-2,5">
                            <div class="card">
                              <a href="{{ url('detail-buku') }}"><img src="img/buku1.png" alt="" href="#"></a>
                              <p class="book-title">Jalan-jalan</p>
                              <p class="book-price">Rp. 40.000</p>
                            </div>
                          </div>
                          <div class="col-2,5 ml-3">
                            <div class="card">
                              <a href="{{ url('detail-buku') }}"><img src="img/buku1.png" alt="" href="#"></a>
                              <p class="book-title">Jalan-jalan</p>
                              <p class="book-price">Rp. 40.000</p>
                            </div>
                          </div>
                          <div class="col-2,5 ml-3">
                            <div class="card">
                              <a href="{{ url('detail-buku') }}"><img src="img/buku1.png" alt="" href="#"></a>
                              <p class="book-title">Jalan-jalan</p>
                              <p class="book-price">Rp. 40.000</p>
                            </div>
                          </div>
                          <div class="col-2,5 ml-3">
                            <div class="card">
                              <a href="{{ url('detail-buku') }}"><img src="img/buku1.png" alt="" href="#"></a>
                              <p class="book-title">Jalan-jalan</p>
                              <p class="book-price">Rp. 40.000</p>
                            </div>
                          </div>
                          <div class="col-2,5 ml-3">
                            <div class="card">
                              <a href="{{ url('detail-buku') }}"><img src="img/buku1.png" alt="" href="#"></a>
                              <p class="book-title">Jalan-jalan</p>
                              <p class="book-price">Rp. 40.000</p>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-4 ml-auto">
                    <img src="img/bacabuku3.png" alt="">
                </div>
            </div>
        </div>
      </div>

    <!--END content mid-->

    <section class="section-cardcontent">
      <div class="container-navbar">
        <h3>2019 EDITION</h3>
        <div class="row">
          <div class="col-2">
            <div class="card" >
              <a href="{{ url('detail-buku') }}"><img src="img/buku3.png" alt="" ></a>
              <div class="text-card">
              <p class="book-title">Sistem Informasi</p>
              <p class="book-price">Rp. 112.000</p>
              </div>
              <button type="submit" class="btn btn-bookas"><p><i class="bi bi-bag-plus-fill"></i> Beli</p></button>
            </div>
          </div>
          <div class="col-2">
            <div class="card" >
              <a href="{{ url('detail-buku') }}" ><img src="img/buku3.png" alt="" ></a>
              <div class="text-card">
              <p class="book-title">Sistem Informasi</p>
              <p class="book-price">Rp. 112.000</p>
              </div>
              <button type="submit" class="btn btn-bookas"><p><i class="bi bi-bag-plus-fill"></i> Beli</p></button>
            </div>
          </div>
          <div class="col-2">
            <div class="card" >
              <a href="{{ url('detail-buku') }}"><img src="img/buku4.png" alt="" ></a>
              <div class="text-card">
              <p class="book-title">Sistem Informasi</p>
              <p class="book-price">Rp. 112.000</p>
              </div>
              <button type="submit" class="btn btn-bookas"><p><i class="bi bi-bag-plus-fill"></i> Beli</p></button>
            </div>
          </div>
          <div class="col-2">
            <div class="card" >
              <a href="{{ url('detail-buku') }}"><img src="img/buku3.png" alt="" ></a>
              <div class="text-card">
              <p class="book-title">Sistem Informasi</p>
              <p class="book-price">Rp. 112.000</p>
              </div>
              <button type="submit" class="btn btn-bookas"><p><i class="bi bi-bag-plus-fill"></i> Beli</p></button>
            </div>
          </div>
          <div class="col-2">
            <div class="card" >
              <a href="{{ url('detail-buku') }}"><img src="img/buku4.png" alt="" ></a>
              <div class="text-card">
              <p class="book-title">Sistem Informasi</p>
              <p class="book-price">Rp. 112.000</p>
              </div>
              <button type="submit" class="btn btn-bookas"><p><i class="bi bi-bag-plus-fill"></i> Beli</p></button>
            </div>
          </div>
          <div class="col-2">
            <div class="card" >
              <a href="{{ url('detail-buku') }}"><img src="img/buku4.png" alt="" ></a>
              <div class="text-card">
              <p class="book-title">Sistem Informasi</p>
              <p class="book-price">Rp. 112.000</p>
              </div>
              <button type="submit" class="btn btn-bookas"><p><i class="bi bi-bag-plus-fill"></i> Beli</p></button>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
    <!--END card conten-->

    <section class="section-cardcontent">
      <div class="container-navbar">
        <h3>2018 EDITION</h3>
        <div class="row">
          <div class="col-2">
            <div class="card" >
              <a href="{{ url('detail-buku') }}"><img src="img/buku3.png" alt="" ></a>
              <div class="text-card">
              <p class="book-title">Sistem Informasi</p>
              <p class="book-price">Rp. 112.000</p>
              </div>
              <button type="submit" class="btn btn-bookas"><p><i class="bi bi-bag-plus-fill"></i> Beli</p></button>
            </div>
          </div>
          <div class="col-2">
            <div class="card" >
              <a href="{{ url('detail-buku') }}" ><img src="img/buku3.png" alt="" ></a>
              <div class="text-card">
              <p class="book-title">Sistem Informasi</p>
              <p class="book-price">Rp. 112.000</p>
              </div>
              <button type="submit" class="btn btn-bookas"><p><i class="bi bi-bag-plus-fill"></i> Beli</p></button>
            </div>
          </div>
          <div class="col-2">
            <div class="card" >
              <a href="{{ url('detail-buku') }}"><img src="img/buku4.png" alt="" ></a>
              <div class="text-card">
              <p class="book-title">Sistem Informasi</p>
              <p class="book-price">Rp. 112.000</p>
              </div>
              <button type="submit" class="btn btn-bookas"><p><i class="bi bi-bag-plus-fill"></i> Beli</p></button>
            </div>
          </div>
          <div class="col-2">
            <div class="card" >
              <a href="{{ url('detail-buku') }}"><img src="img/buku3.png" alt="" ></a>
              <div class="text-card">
              <p class="book-title">Sistem Informasi</p>
              <p class="book-price">Rp. 112.000</p>
              </div>
              <button type="submit" class="btn btn-bookas"><p><i class="bi bi-bag-plus-fill"></i> Beli</p></button>
            </div>
          </div>
          <div class="col-2">
            <div class="card" >
              <a href="{{ url('detail-buku') }}"><img src="img/buku4.png" alt="" ></a>
              <div class="text-card">
              <p class="book-title">Sistem Informasi</p>
              <p class="book-price">Rp. 112.000</p>
              </div>
              <button type="submit" class="btn btn-bookas"><p><i class="bi bi-bag-plus-fill"></i> Beli</p></button>
            </div>
          </div>
          <div class="col-2">
            <div class="card" >
              <a href="{{ url('detail-buku') }}"><img src="img/buku4.png" alt="" ></a>
              <div class="text-card">
              <p class="book-title">Sistem Informasi</p>
              <p class="book-price">Rp. 112.000</p>
              </div>
              <button type="submit" class="btn btn-bookas"><p><i class="bi bi-bag-plus-fill"></i> Beli</p></button>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
    <!--END card conten-->


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
