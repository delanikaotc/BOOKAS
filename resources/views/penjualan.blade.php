<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Penjualan</title>
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
        <a href="#" style="color: #212121;"><i class="bi bi-clipboard" ></i>Pesanan</a>
        <a href="#" style="color: #212121;"><i class="bi bi-journal" ></i>Produk</a>
        <a href="#" class="text-center" class="active" style="color: #212121;"><i class="bi bi-file-earmark-bar-graph" ></i>Penjualan</a>
        <a href="#" style="color: #212121;"><i class="bi bi-cash-stack" ></i>Penghasilan</a>
        <button class="btn" style="color: #EA6941;"><i class="bi bi-box-arrow-right"></i>Keluar</button>
        </div>
    <!--END sidebar-->
<div class="main"> 
        <div class="content-admin">
            <div class="row-1">
                <div class="col-sm-10">
                    <div class="card border-0 shadow">
                        <div class="card-body p-4">
                            <div class="table-responsive"><h1>Penjualan Saya</h1>
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID Penjualan</th>
                                            <th scope="col">Waktu</th>
                                            <th scope="col">Pesanan</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#B28479</td>
                                            <td>16:15 04/03/21</td>
                                            <td>Wingit</td>
                                            <td>Rp50.000,00</td>
                                            <td>
                                                <div class="btn-group">
                                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">
                                                  Perlu dikirim
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Selesai</a>
                                                </div>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#B28499</td>
                                            <td>16:25 04/03/21</td>
                                            <td>NKCTHI</td>
                                            <td>Rp90.000,00</td>
                                            <td>
                                                <div class="btn-group">
                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Selesai
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Perlu dikirim</a>
                                                </div>
                                              </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
    
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
