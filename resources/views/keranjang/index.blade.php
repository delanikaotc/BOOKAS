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
            @include("component.nav_header")
          </div>
        </div>
        <div class="container-header">
            <div class="header-top">
                Keranjang Saya
            </div>
            <hr class="hr1">
            <div class="header-bottom">
                <i class="fas fa-map-marker-alt mr-2" style='font-size:25px;color:#EA6941'></i>Alamat Pengiriman
            </div>
            <div class="row address-detail">
                <div class="col-3">
                    <div>{{ $user->name }}</div>
                    <div>{{ $user->phone }}</div>
                </div>
                <div class="col-8">
                    <div>{{ $user->address }}</div>
                    <div></div>
                </div>
            </div>
        </div>
    @include("alert.alert")
    <?php $total_price = 0; ?>
    @foreach($items as $row)
        <div class="container-cartitem">
            <div class="row cartitem-top">
                <div class="cartitem-top-avatar"><img src="img/avatar.png" alt="" class="avatar-cartitem"></div>
                <div class="cartitem-top-nameAcc">{{ $row->nama_penjual }}</div>
            </div>
            <hr class="hr1">
            <div class="row cartitem-bottom">
                <div class="col-2"><img src="storage/image/{{ $row->image }}" alt="" class="bookcover-cartitem"></div>
                <div class="col-6 book-cartitem">
                    <div class="booktitle-cartitem">{{ $row->name }}</div>
                    <div class="booktitle-cartitem">Qty : {{ $row->qty }}</div>
                    <div class="caption-cartitem">{{ $row->deskripsi }}</div>
                </div>
                <div class="col-2 price-cartitem">Rp. {{ number_format($row->price, 0,",",".") }}</div>
                <div class="col-2 delete-cartitem">
                    <a href="keranjang/delete/{{ $row->id }}" onclick="return confirm('Anda yakin?')" class="btn btn-delete">Hapus</a>
                </div>
            </div>
        </div>
        <?php $total_price += $row->price*$row->qty; ?>
    @endforeach
        <div class="container-total">
            <div class="row container-total-top">
                <div class="labeltotal">Total Pesanan:</div>
                <div class="totalcart">Rp. {{ number_format($total_price, 0,",",".") }}</div>
            </div>
            @if ($total_price > 0)
            <div class="container-total-bottom">
                <a class="btn btn-bookas" href="{{ url('pembayaran') }}">
                    <p>Buat Pesanan</p>
                </a>
            </div>
            @endif
        </div>
    @include("component.nav_footer")
    </div>
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous ">
    </script>
    <script src="https://kit.fontawesome.com/9923874ec2.js " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous ">
    </script>
</body>

</html>
