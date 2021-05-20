<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Detail Produk</title>
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
            @include("component.nav_header")
          </div>
        </div>
    <!--END Navbar-->
<div class="sidenav">
        <a href="#" class="text-left" style="color: #212121;" ><i class="bi bi-person-circle"></i>{{ session("name") }}</a>
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
                        <div class="card-body p-2">
                            <form class="px-2 py-2">
                            <table class="table-responsive"><h1>Tambah Buku</h1>
                            <div class="dropdown-divider"></div>
                              <label for="fjudul">Judul Buku &emsp;</label>
                              <input type="text" id="fjudul" name="fjudul" value=""/><br>
                              <label for="fpengarang">Pengarang &emsp;</label>
                              <input type="text" id="fpengarang" name="fpengarang" value=""/><br>
                              <label for="fdeskripsi">Deskripsi &emsp;&emsp;</label>
                              <input type="text" id="fdeskripsi" name="fdeskripsi" value=""/><br>
                              <label for="fkondisi">Kondisi Buku &emsp;</label>
                              <input type="text" id="fkondisi" name="fkondisi" value=""/><br>
                              <label for="fpenerbit">Penerbit &emsp;&emsp;</label>
                              <input type="text" id="fpenerbit" name="fpenerbit" value=""/><br>
                              <label for="ftahun">Tahun Terbit &emsp;</label>
                              <input type="text" id="ftahun" name="ftahun" value=""/><br>
                              <label for="fharga">Harga &emsp;&emsp;&emsp;</label>
                              <input type="text" id="fharga" name="fharga" value=""/><br>
                              <label for="fgambar">Gambar &emsp;</label>
                              <input type="file" id="fgambar" name="fgambar" value=""/><br>
                              <button type="submit" class="btn btn-prove">Simpan</button>
                            </table>
                        </form>
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
