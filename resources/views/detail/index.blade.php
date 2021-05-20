<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Detail Buku</title>
    <!-- CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">

</head>

<body>
    <div class="container-fluid">
        <div class="container-navbar">
            @include("component.nav_header")
          </div>
        </div>
    <!--END Navbar-->

    <div class="section-bookdetail">
        <div class="container-navbar">
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="book-image">
                            <img style="width: 100%" class="img img-responsive" src="/storage/image/{{$product->image}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="midcont">
                        <p class="title">{{ $product->name }}</p>
                        <p class="author">oleh <span>{{ $product->penulis }}</span></p>
                        <div class="book-cond">
                            <p class="title-cond">Kondisi Buku</p>
                            <p class="detail-cond">{{ $product->kondisi }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="cardbeli">
                            <div class="content">
                                <h4>Harga:</h4>
                                <h2>Rp. {{ $product->price }}</h2>
                            </div>
                            <a href="/pembayaran" style="width: 80%; margin: 0px 24px;" class="btn btn-bookas"><p>Beli Sekarang</p></a>
                            <a href="/keranjang/add/{{$product->id}}" style="width: 80%; margin: 8px 24px;" class="btn btn-keranjang"><p>Tambah Ke Keranjang +</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END TopContent-->

    <div class="section-carddetail">
        <div class="container-navbar">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="book-detail">
                            <p class="title">Detail</p>
                            <div class="row">
                                <div class="col-2">
                                    <p class="detail-title">Terbit</p>
                                    <p class="detail-text">{{ $product->tgl_terbit }}</p>
                                </div>
                                <div class="col-2">
                                    <p class="detail-title">Penerbit</p>
                                    <p class="detail-text">{{ $product->penerbit }}</p>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <p class="title">Deskripsi</p>
                            <p class="text-detail">{{ $product->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END MidContent-->
{{--@include("component.nav_footer")--}}
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous ">
    </script>
    <script src="https://kit.fontawesome.com/9923874ec2.js " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous ">
    </script>
</body>
</html>
