<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Produkku</title>
    <!-- CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/css/pengguna.css') }}">

</head>

<body>
    <div class="container-fluid">
        <div class="container-navbar">
            @include("component.nav_header")
        </div>
    </div>
    <!--END Navbar-->
    <div class="section-user">
        <div class="container-user">
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <a href="{{ url('/profile') }}" style="color: #212121;"><i class="bi bi-person-circle"></i> {{ session("name") }}</a>
                        <a href="{{ url('/pesanan') }}" style="color: #212121;"><i class="bi bi-clipboard"></i> Pesanan</a>
                        <button class="btn-bookas">
                            <a href="{{ url('/produk') }}" style="color: #FFFFFF;"><i class="bi bi-journal"></i> Produk</a>
                        </button>
                        <a href="{{ url('/penjualan') }}" style="color: #212121;"><i class="bi bi-file-earmark-bar-graph"></i> Penjualan</a>
                        <a href="{{ url('/penghasilan') }}" style="color: #212121;"><i class="bi bi-cash-stack"></i> Penghasilan</a>
                        <a href="{{ url('/logout') }}" style="color: #EA6941;"><i class="bi bi-box-arrow-right"></i> Keluar</a>
                    </div>
                </div>
                <!-- END sidebar -->


                <div class="col-9">
                    <div class="card">
                        <div class="card-cont">
                            <h1>Buku Bekas Jualan Saya</h1>
                            <div class="dropdown-divider"></div>
                            <a href="{{ url('/tambah-buku') }}" class="btn btn-bookas">
                                <p>Tambah Buku +</p>
                            </a>
                        </div>
                    </div>
                    <!-- LANJUT -->

                    <div class="section-myitem">
                        <div class="row">
                        @foreach($items as $item)
                            <div class="col-4">
                                <div class="card">
                                    <a href="detail-buku/{{$item->id}}"><img src="storage/image/{{$item->image}}" alt="" style="height: 180px; width:100%"></a>
                                    <div class="text-card">
                                        <p class="book-title">{{$item->name}}</p>
                                        <p class="book-price">Rp. {{ number_format($item->price,0,",",".") }}</p>
                                    </div>
                                    <div class="">
                                        <center>
                                          <a href="edit-buku/{{$item->id}}" class="btn btn-edit">
                                              <p> Edit</p>
                                          </a>
                                          <a href="delete-buku/{{$item->id}}" onclick="return confirm('Anda Yakin?');" class="btn btn-hapus">
                                              <p> Hapus</p>
                                          </a>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END sidebar-->


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
