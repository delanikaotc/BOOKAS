<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Penarikan</title>
        <!-- CSS -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ url('/css/admin.css') }}">

    </head>

<body>
  <div class="container-fluid">
    <div class="container-navbar">
        @include("component.nav_headeradmin")
      </div>
    </div>
    <!--END Navbar-->
    <div class="sidenav">
        <h2 class="text-center" style="">Halo Admin!</h2>
        <h2 class="text-center" style="color: #F4BD5C;">{{ session("name") }}</h2>
        <a href="{{ url('/admin-pengguna') }}" ><i class="bi bi-people-fill"></i>User</a>
        <a href="{{ url('/admin-transaksi') }}"><i class="bi bi-handbag-fill"></i>Transaksi</a>
        <a href="{{ url('/admin-penarikan') }}" class="active"><i class="bi bi-credit-card-2-back-fill"></i>Penarikan</a>
        <a href="{{ url('/logout') }}" class="btn"><i class="bi bi-box-arrow-left"></i>Keluar</a>
    </div>
    <!--END sidebar-->

    <div class="main">
        <h2 class="text-center">Penarikan</h2>
        <div class="content-admin">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card border-0 shadow">
                        <div class="card-body p-5">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">No. Penarikan</th>
                                            <th scope="col">No. User</th>
                                            <th scope="col">Jumlah Penarikan</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Aksi</th>
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
                                          <td>{{ $value->nama_penjual }}</td>
                                          <td>Rp. {{ number_format($value->total, 0, ",",".") }}</td>
                                          <td>{{ date('d F Y H:i', strtotime($value->created_at)) }}</td>
                                          <td>
                                            <label class="badge badge-{{ $arr_warna[$value->status] }}">{{ $arr_status[$value->status] }}</label>
                                          </td>
                                          <td>
                                            <?php $btn_confirm=false; $stt='';
                                            if ($value->status=='0') {
                                              $stt=1;
                                              $btn_confirm=true;
                                            }
                                            ?>
                                            @if ($btn_confirm)
                                              <a href="{{ url('admin-confirm-penarikan') }}/{{ $value->no_transaksi }}" class="btn btn-success" onclick="return confirm('Anda Yakin?')">Confirm</a>
                                            @endif
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
    </div>

<footer class="footer">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous ">
    </script>
    <script src="https://kit.fontawesome.com/9923874ec2.js " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous ">
    </script>
</footer>
