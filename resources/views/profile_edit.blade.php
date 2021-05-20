<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>Profile</title>
  <!-- CSS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/pengguna.css">

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
            <button class="btn-bookas">
              <a href="{{ url('/profile') }}" style="color: #FFFFFF;"><i class="bi bi-person-circle"></i> {{ session("name") }}</a>
            </button>
            <a href="{{ url('/pesanan') }}" style="color: #212121;"><i class="bi bi-clipboard"></i> Pesanan</a>
            <a href="{{ url('/produk') }}" style="color: #212121;"><i class="bi bi-journal"></i> Produk</a>
            <a href="{{ url('/penjualan') }}" style="color: #212121;"><i class="bi bi-file-earmark-bar-graph"></i> Penjualan</a>
            <a href="{{ url('/penghasilan') }}" style="color: #212121;"><i class="bi bi-cash-stack"></i> Penghasilan</a>
            <a href="/logout" style="color: #EA6941;"><i class="bi bi-box-arrow-right"></i> Keluar</a>
          </div>
        </div>

        <div class="col-9">
          <div class="card">
            <div class="card-cont">
              <h1>Profil Saya</h1>
              <h5>Kelola Profilemu!<h5>
                  <div class="dropdown-divider"></div>
                  <form class="form-input-hasil" action="{{ route('updateprofile', $id )}}" method="POST">
                    @csrf
                    <div class="form-group row">
                      <label for="inputPassword" class="col-sm-2 col-form-label">No. Telp</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNoTelp" placeholder="Nomer" name="phone">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputAlamat" placeholder="Alamat" name="address">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-bookas">
                      <p>Simpan</p>
                    </button>
                  </form>
            </div>
          </div>
          <!-- END Profilesaya -->
          <div class="lanjut">
            <div class="card">
              <div class="card-cont">
                <h1>Rekening Saya</h1>
                <div class="dropdown-divider"></div>
                <form class="form-input-hasil" action="{{ route('inputrekening')}}" method="POST">
                  @csrf
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Nama Bank</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputBank" placeholder="Bank" name="namaBank">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">No. Rekening</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputNoRek" placeholder="Nomor" name="noRekening">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-bookas">Simpan</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END MIDCONTENT -->


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