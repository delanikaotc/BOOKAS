<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Profil</title>
        <!-- CSS -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    
    </head>

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
        <a href="#" class="text-center" class="active" style="color: #212121;" ><i class="bi bi-person-circle"></i>Alvina Vania</a>
        <a href="#" style="color: #212121;"><i class="bi bi-clipboard" ></i>Pesanan</a>
        <a href="#" style="color: #212121;"><i class="bi bi-journal" ></i>Produk</a>
        <a href="#" style="color: #212121;"><i class="bi bi-file-earmark-bar-graph" ></i>Penjualan</a>
        <a href="#" style="color: #212121;"><i class="bi bi-cash-stack" ></i>Penghasilan</a>
        <button class="btn" style="color: #EA6941;"><i class="bi bi-box-arrow-right"></i>Keluar</button>
        </div>
    <!--END sidebar-->
<div class="main"> 
        <div class="content-admin">
            <div class="row-1">
                <div class="col-sm-10">
                    <div class="card border-0 shadow">
                        <div class="card-body p-2">
                        <form class="px-2 py-2">
                            <div class="table-responsive"><h1>Profil Saya</h1>
                            <div class="dropdown-divider"></div>
  <label for="funame">Username &emsp;&emsp;&emsp;&emsp;&emsp;<b>alvinakrn</b></label><br>
  <label for="fmail">E-mail &emsp;&emsp;&emsp;&emsp;&emsp;</label>
  <input type="text" id="fmail" name="fmail" value=""><br>
  <label for="fnama">Nama &emsp;&emsp;&emsp;&emsp;&emsp;</label>
  <input type="text" id="fnama" name="fnama" value=""><br>
  <label for="ftelpon">Nomor Telepon &emsp;</label>
  <input type="text" id="ftelpon" name="ftelpon" value=""><br>
  <label for="falamat">Alamat &emsp;&emsp;&emsp;&emsp;&emsp;</label>
  <input type="text" id="falamat" name="falamat" value=""><br>
  <button type="submit" class="btn btn-prove">Simpan</button>
</form>
        <div class="content-admin">
           <h1>Rekening Saya</h1>
                            <div class="dropdown-divider"></div>
  <label for="fbank">Bank Rekening &emsp;</label>
  <input type="text" id="fbank" name="fbank" value=""><br>
  <label for="fnomor">Nomor Rekening &emsp;</label>
  <input type="text" id="fnomor" name="fnomor" value=""><br>
  <label for="frekening">Nama Rekening &emsp;&emsp;</label>
  <input type="text" id="frekening" name="frekening" value=""><br>
  <button type="submit" class="btn btn-prove">Simpan</button>
</form>
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