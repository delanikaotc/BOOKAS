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
        <link rel="stylesheet" href="css/admin.css">

    </head>

<body>
  <div class="container-fluid">
    <div class="container-navbar">
        @include("component.nav_header")
      </div>
    </div>
    <!--END Navbar-->
    <div class="sidenav">
        <h2 class="text-center" style="">Halo Admin!</h2>
        <h2 class="text-center" style="color: #F4BD5C;">{{ session("name") }}</h2>
        <a href="/admin-pengguna" ><i class="bi bi-people-fill"></i>User</a>
        <a href="/admin-transaksi"><i class="bi bi-handbag-fill"></i>Transaksi</a>
        <a href="/admin-penarikan" class="active"><i class="bi bi-credit-card-2-back-fill"></i>Penarikan</a>
        <a href="/logout" class="btn"><i class="bi bi-box-arrow-left"></i>Keluar</a>
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
                                            <th scope="col">Nama</th>
                                            <th scope="col">Jumlah Penarikan</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>1</td>
                                            <td>Otto</td>
                                            <td>Rp. 2.000.000</td>
                                            <td>17 Agustus 2020</td>
                                            <td>
                                                <div class="btn-group">
                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Status
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Pending</a>
                                                  <a class="dropdown-item" href="#">Paid</a>
                                                </div>
                                              </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>2</td>
                                            <td>Thornton</td>
                                            <td>Rp. 150.000</td>
                                            <td>17 Agustus 2020</td>
                                            <td>
                                                <div class="btn-group">
                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Status
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Pending</a>
                                                  <a class="dropdown-item" href="#">Paid</a>
                                                </div>
                                              </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>3</td>
                                            <td>Bird</td>
                                            <td>Rp. 200.000</td>
                                            <td>17 Agustus 2020</td>
                                            <td>
                                                <div class="btn-group">
                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Status
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Pending</a>
                                                  <a class="dropdown-item" href="#">Paid</a>
                                                </div>
                                              </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>4</td>
                                            <td>Williams</td>
                                            <td>Rp. 3.000.000</td>
                                            <td>17 Agustus 2020</td>
                                            <td>
                                                <div class="btn-group">
                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Status
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Pending</a>
                                                  <a class="dropdown-item" href="#">Paid</a>
                                                </div>
                                              </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
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
