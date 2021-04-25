<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Keranjang Saya</title>
    <!-- CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
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
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item ml-4">
                            <a class="nav-link" href="#">
                                <p>Cart</p>
                            </a>
                        </li>
                        <li class="nav-item ml-2">
                            <a class="nav-link" href="#">
                                <p>User10</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container-header">
            <div class="header-top">
                Keranjang Saya
            </div>
            <hr class="hr1">
            <div class="header-bottom">
                <button class="btn btn-secondary">Semua</button>
                <button class="btn btn-secondary">A-Z</button>
                <button class="btn btn-secondary">Termurah</button>
                <button class="btn btn-secondary">Termahal</button>
            </div>
        </div>
        <div class="container-cartitem">
            <div class="row cartitem-top">
                <div class="cartitem-top-avatar"><img src="img/avatar.png" alt="" class="avatar-cartitem"></div>
                <div class="cartitem-top-nameAcc">Tika Store</div>
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
                <div class="col-2 delete-cartitem">
                    <button class="btn btn-delete">Hapus</button>
                </div>
            </div>
        </div>
        <div class="container-cartitem">
            <div class="row cartitem-top">
                <div class="cartitem-top-avatar"><img src="img/avatar.png" alt="" class="avatar-cartitem"></div>
                <div class="cartitem-top-nameAcc">Tika Store</div>
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
                <div class="col-2 delete-cartitem">
                    <button class="btn btn-delete">Hapus</button>
                </div>
            </div>
        </div>
        <div class="container-total">
            <div class="row container-total-top">
                <div class="labeltotal">Total Pesanan:</div>
                <div class="totalcart">Rp50.000,00</div>
            </div>
            <div class="container-total-bottom">
                <a class="btn btn-bookas" href="{{ url('pembayaran') }}">
                    <p>Buat Pesanan</p>
                </a>
            </div>
        </div>
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
    </div>
</body>

</html>