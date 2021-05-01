<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Pemesanan</title>
        <!-- CSS -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="css/user.css">
    
    </head>

<body>
    <div class="container-fluid">
        <div class="container-navbar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img class="logo" src="img/Logo.png" alt=""><span class="ml-2">BOOKAS</span></a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <div class="search">
                  <ul class="navbar-nav mr-auto">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
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
                        <a class="nav-link" href="#"><i class="bi bi-handbag-fill" style="font-size: 20px; color: #ffffff;"></i></i></a>
                      </li>
                    <li class="nav-item ml-2">
                      <a class="nav-link" href="#"><p>Alvina</p></a>
                    </li>
                  </ul>
                </div>
              </nav>
          </div>
        </div>
    <!--END Navbar-->
<div class="sidenav">
        <a href="#" class="text-left" style="color: #212121;" ><i class="bi bi-person-circle"></i>Alvina Vania</a>
        <a href="#" class="text-center" class="active" style="color: #212121;"><i class="bi bi-clipboard" ></i>Pesanan</a>
        <a href="#" style="color: #212121;"><i class="bi bi-journal" ></i>Produk</a>
        <a href="#" style="color: #212121;"><i class="bi bi-file-earmark-bar-graph" ></i>Penjualan</a>
        <a href="#" style="color: #212121;"><i class="bi bi-cash-stack" ></i>Penghasilan</a>
        <button class="btn" style="color: #EA6941;"><i class="bi bi-box-arrow-right"></i>Keluar</button>
        </div>
    <!--END sidebar-->
    <div class="main"> 
        <div class="content-admin">
            <div class="row-1">
                <div class="col-sm-12">
                    <div class="card border-0 shadow">
                        <div class="card-body p-4">
                            <div class="table-responsive"><h1>Pesanan Saya</h1>
                                <div class="container-header">
            <hr class="hr1">
            <div class="header-bottom">
                <button class="btn btn-secondary">Semua</button>
                <button class="btn btn-secondary">Belum Bayar</button>
                <button class="btn btn-secondary">Dikirim</button>
                <button class="btn btn-secondary">Selesai</button>
            </div>
        </div>
        <div class="container-cartitem">
            <div class="row cartitem-top">
                <div class="cartitem-top-avatar"><i class="bi bi-person-circle"></i></div>
                <div class="cartitem-top-nameAcc">Tika Store</div>
                <button class="btn btn-secondary">Selesai</button>
            </div>
            <hr class="hr1">
            <div class="row cartitem-bottom">
                <div class="col-2"><img src="img/buku5.png" alt="" class="bookcover-cartitem"></div>
                <div class="col-6 book-cartitem">
                    <div class="booktitle-cartitem">
                        Wingit
                    </div>
                    <div class="caption-cartitem">
                        Good condition, dijual karena BU
                    </div>
                </div>
                <div class="col-2 price-cartitem">Rp50.000,00</div>
            </div>
        </div>
        <hr class="hr1">
        <div class="container-total">
            <div class="row container-total-top">
                <div class="labeltotal">Total Pesanan:</div>
                <div class="totalcart" style="color: #EA6941;">Rp50.000,00</div>
            </div>
        <div class="container-cartitem">
            <div class="row cartitem-top">
                <div class="cartitem-top-avatar"><i class="bi bi-person-circle"></i></div>
                <div class="cartitem-top-nameAcc">Tika Store</div>
                <button class="btn btn-secondary">Selesai</button>
            </div>
            <hr class="hr1">
            <div class="row cartitem-bottom">
                <div class="col-2"><img src="img/buku5.png" alt="" class="bookcover-cartitem"></div>
                <div class="col-6 book-cartitem">
                    <div class="booktitle-cartitem">
                        Wingit
                    </div>
                    <div class="caption-cartitem">
                        Good condition, dijual karena BU
                    </div>
                </div>
                <div class="col-2 price-cartitem">Rp50.000,00</div>
                </div>
            </div>
            
        <div class="container-total">
            <div class="row container-total-top">
                <div class="labeltotal">Total Pesanan:</div>
                <div class="totalcart" style="color: #EA6941;">Rp50.000,00</div>
            </div>
        </div>
        
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
    <footer class="footer">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous ">
    </script>
    <script src="https://kit.fontawesome.com/9923874ec2.js " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous ">
    </script>
</footer>
