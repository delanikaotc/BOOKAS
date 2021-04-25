<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Info Pembayaran</title>
    <!-- CSS -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
                <div class="col-12 title-infopembayaran">INFO PEMBAYARAN</div>
            </nav>
        </div>
        <div class="container-header">
            <div class="header-top">
                Info Pembayaran
            </div>
            <hr class="hr1">
            <div class="header-bottom">
                <div class="totalcart">Rp50.000,00</div>
            </div>
        </div>
        <div class="container-infopembayaran">
            <div class="row infopembayaran-bottom">
                <div class="col-1 icon-bank"><img src="img/bni.png" alt="" class="icon-bank"></div>
                <div class="col-6 detail-bank">
                    <div style="font-weight: 500;">BNI</div>
                    <div>No. Rekening: 120483958</div>
                    <div>Nama Rekening: Shania Salsabila</div>
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-uploadbuktitrf"><p>Upload bukti transfer sekarang</p></button>
            <a class="btn btn-uploadbuktitrf2 mt-4"  href="{{ url('/') }}"><p>Upload bukti transfer nanti</p></a>
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