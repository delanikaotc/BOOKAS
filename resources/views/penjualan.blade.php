<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Penjualanku</title>
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
              <a href="{{ url('/profile') }}"  style="color: #212121;" ><i class="bi bi-person-circle"></i> {{ session("name") }}</a>
              <a href="{{ url('/pesanan') }}" style="color: #212121;"><i class="bi bi-clipboard" ></i> Pesanan</a>
              <a href="{{ url('/produk') }}" style="color: #212121;"><i class="bi bi-journal" ></i> Produk</a>
              <button class="btn-bookas">
              <a href="{{ url('/penjualan') }}" style="color: #FFFFFF;"><i class="bi bi-file-earmark-bar-graph" ></i> Penjualan</a>
              </button>
              <a href="{{ url('/penghasilan') }}" style="color: #212121;"><i class="bi bi-cash-stack" ></i> Penghasilan</a>
              <a href="{{ url('/logout') }}" style="color: #EA6941;"><i class="bi bi-box-arrow-right"></i> Keluar</a>
            </div>
          </div>

          <div class="col-9">
            <div class="card">
              <div class="card-cont">
                  <h1>Penjualan Saya</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="font-size: 12px;">ID Trans</th>
                                <th scope="col" style="font-size: 12px;">Waktu</th>
                                <th scope="col" style="font-size: 12px;">Nama</th>
                                <th scope="col" style="font-size: 12px;">Pesanan</th>
                                <th scope="col" style="font-size: 12px;">No.Telp</th>
                                <th scope="col" style="font-size: 12px;">Alamat</th>
                                <th scope="col" style="font-size: 12px;">Total</th>
                                <th scope="col" style="font-size: 12px;">Status</th>
                                <th style="font-size: 12px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          $arr_warna = array('danger', 'warning', 'primary', 'info', 'success');
                          $arr_status = array('Proses Pembayaran', 'Menunggu Persetujuan Admin', 'Menunggu Persetujuan Penjual', 'Proses Pengiriman', 'Selesai');
                          ?>
                          @foreach ($items as $value):
                            <tr>
                              <td style="font-size: 12px;">{{ $value->no_transaksi }}</td>
                              <td style="font-size: 12px;">{{ $value->created_at }}</td>
                              <td style="font-size: 12px;">{{ $value->nama_pembeli }}</td>
                              <td style="font-size: 12px;">{{ $value->qty }}, {{ $value->name }}</td>
                              <td style="font-size: 12px;">{{ $value->phone }}</td>
                              <td style="font-size: 12px;">{{ $value->address }}</td>
                              <td style="font-size: 12px;">Rp. {{ number_format($value->price*$value->qty, 0,",",".") }}</td>
                              <td style="font-size: 12px;">
                                <label class="badge badge-{{ $arr_warna[$value->status] }}">{{ $arr_status[$value->status] }}</label>
                              </td>
                              <td >
                                <?php $btn_confirm=false; $stt='';
                                if ($value->status==2) {
                                  $stt=3;
                                  $btn_confirm=true;
                                }
                                if ($value->status==3) {
                                  $stt=4;
                                  $btn_confirm=true;
                                }
                                ?>
                                @if ($btn_confirm)
                                  <a href="confirm-status/{{ $value->no_transaksi }}/{{ $stt }}" class="btn btn-success" onclick="return confirm('Anda Yakin?')" style="font-size: 10px;">Confirm</a>
                                @endif
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Profilesaya -->


        </div>
      </div>
    </div>
  <!-- END MIDCONTENT -->
    </div>

@include("component.nav_footer")
</body>
        <!-- jQuery and JS bundle w/ Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous ">
        </script>
        <script src="https://kit.fontawesome.com/9923874ec2.js " crossorigin="anonymous "></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous ">
        </script>
