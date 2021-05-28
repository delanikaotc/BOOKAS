<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Penghasilanku</title>
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
              <a href="{{ url('/profile') }}" style="color: #212121;" ><i class="bi bi-person-circle"></i> {{ session("name") }}</a>
              <a href="{{ url('/pesanan') }}" style="color: #212121;"><i class="bi bi-clipboard" ></i> Pesanan</a>
              <a href="{{ url('/produk') }}" style="color: #212121;"><i class="bi bi-journal" ></i> Produk</a>
              <a href="{{ url('/penjualan') }}" style="color: #212121;"><i class="bi bi-file-earmark-bar-graph" ></i> Penjualan</a>
              <button class="btn-bookas">
              <a href="{{ url('/penghasilan') }}" style="color: #FFFFFF;"><i class="bi bi-cash-stack" ></i> Penghasilan</a>
              </button>
              <a href="{{ url('/logout') }}" style="color: #EA6941;"><i class="bi bi-box-arrow-right"></i> Keluar</a>
            </div>
          </div>

          <div class="col-9">
            <div class="card">
              <div class="card-cont">
                  <h1>Penghasilan Saya</h1>
                  <div class="dropdown-divider"></div>
                  <form>
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Buku Terjual</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ number_format($buku,0,',','.') }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label"> Penghasilan</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Rp. {{ number_format($saldo,0,',','.') }}">
                      </div>
                    </div>
                  </form>
                  @if ($saldo > 0)
                    <a href="{{ url('/ajukan') }}" class="btn btn-bookas"> <p>Ajukan Penarikan</p></a>
                  @endif
                </div>
            </div>
            <!-- END Profilesaya -->
            <div class="lanjut">
            <div class="card">
              <div class="card-cont">
                  <h1>Penarikan Saya</h1>
                  <table class="table">
                    <thead>
                        <tr>
                          <th scope="col">ID Penarikan</th>
                          <th scope="col">Waktu</th>
                          <th scope="col">Total Dana</th>
                          <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                      $arr_warna = array('warning', 'success');
                      $arr_status = array('Pending', 'Success');
                      ?>
                      @foreach ($items as $value)
                        <tr>
                          <th scope="row">{{ $value->no_transaksi }}</th>
                          <td>{{ date('d F Y H:i', strtotime($value->created_at)) }}</td>
                          <td>Rp. {{ number_format($value->total, 0, ",",".") }}</td>
                          <td>
                            <label class="badge badge-{{ $arr_warna[$value->status] }}">{{ $arr_status[$value->status] }}</label>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
                </div>
              </div>
            </div>

        </div>
      </div>
    </div>
  <!-- END MIDCONTENT -->
@include("component.nav_footer")
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous ">
</script>
<script src="https://kit.fontawesome.com/9923874ec2.js " crossorigin="anonymous "></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous ">
</script>
