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
    <link rel="stylesheet" href="{{ url('/css/styles.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="container-navbar">
            @include("component.nav_header")
        </div>
        <div class="container-header">
            <div class="header-top">
                Info Pembayaran
            </div>
            <hr class="hr1">
            <div style="padding-left:20px;">
              <b>BANK : MANDIRI</b> <br>
              <b>Atas Nama : Ankun</b> <br>
              <b>Nomor Rekening : 404</b>
              <hr>
            </div>
            <div class="header-bottom">
              <?php $total_price = 0; ?>
              @foreach($items as $row)
                  <?php $total_price += $row->price*$row->qty; ?>
              @endforeach
              <b>Total yang harus di transfer : </b>  Rp. {{ number_format($total_price, 0,",",".") }}
              <!-- <div class="totalcart">Rp. {{ number_format($total_price, 0,",",".") }}</div> -->
            </div>
        </div>
        <div>
          @include("alert.alert")
            <form action="{{ route('uploadbukti')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <input type="hidden" name="no_transaksi" value="{{$no_transaksi}}">
                <div style="margin-left: 135px;width: 1169px;">
                  <b>Foto Transfer : </b> <input type="file" name="image" class="form-control" value="" required>
                </div>
                <br>
                <button type="submit" class="btn btn-uploadbuktitrf"><p>Upload bukti transfer sekarang</p></button>
                <a class="btn btn-uploadbuktitrf2 mt-4"  href="{{ url('/pesanan') }}"><p>Upload bukti transfer nanti</p></a>
            </form>
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
