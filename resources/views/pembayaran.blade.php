<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Pembayaran</title>
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
            @include("component.nav_header")
          </div>
        </div>

        <div class="container-header-pembayaran">
            <div class="header-top">
                Pembayaran
            </div>
            <hr class="hr1">
            <div class="header-bottom">
                <i class="fas fa-map-marker-alt mr-2" style='font-size:25px;color:#EA6941'></i>Alamat Pengiriman
            </div>
            <div class="row address-detail">
                <div class="col-3">
                    <div>{{ session("name") }}</div>
                    <div>082246680465</div>
                </div>
                <div class="col-8">
                    <div>Jl. Adu Rayu 31 No. 99, Kel. Srikaya, Kec. Apel</div>
                    <div>Jatiasih, Bekasi</div>
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
                <div class="col-8 book-cartitem">
                    <div class="booktitle-cartitem">
                        Wingit
                    </div>
                    <div class="caption-cartitem">
                        Good condition, dijual karena BU
                    </div>
                </div>
                <div class="col-2 subtotal-price" style="text-align: right;">Rp50.000,00</div>
            </div>
            <!-- <div class="container-subtotal">
                <div class="row container-subtotal-detail">
                    <div class="label-subtotal col-6">Total Pesanan:</div>
                    <div class="label-subtotal ">Rp50.000,00</div>
                </div>
                <div class="row container-subtotal-detail">
                    <div class="label-subtotal col-6">Ongkir:</div>
                    <div class="label-subtotal">Rp9.000,00</div>
                </div>
            </div> -->
        </div>
        
        <div class="container-total">
            <div class="row container-total-top">
                <div class="labeltotal">Total Pesanan:</div>
                <div class="totalcart">Rp50.000,00</div>
            </div>
            <div class="container-total-bottom">
                <a class="btn btn-bookas" href="{{ url('bukti-transfer') }}"><p>Buat Pesanan</p></a>
            </div>
        </div>
        @include("component.nav_footer")
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous ">
    </script>
    <script src="https://kit.fontawesome.com/9923874ec2.js " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous ">
    </script>
    </div>
</body>

</html>
