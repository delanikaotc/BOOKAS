<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>BOOKAS</title>
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
        <a href="{{ url('/admin-pengguna') }}" class="active"><i class="bi bi-people-fill"></i>User</a>
        <a href="{{ url('/admin-transaksi') }}"><i class="bi bi-handbag-fill"></i>Transaksi</a>
        <a href="{{ url('/admin-penarikan') }}"><i class="bi bi-credit-card-2-back-fill"></i>Penarikan</a>
        <a style="float: left" href="{{ url('/logout') }}" class="btn"><i class="bi bi-box-arrow-left"></i>Keluar</a>
    </div>
    <!--END sidebar-->

    <div class="main">
        <h2 class="text-center">Pengguna</h2>
        <div class="content-admin">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card border-0 shadow">
                        <div class="card-body p-5">
                            <div class="table-responsive">
                                <h5 class="berhasil-hapus">@include('alert.alert')</h5>
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID. Role</th>
                                            <th scope="col">No. Role</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            @if(is_null($user))
                                            <td> sorry bray ganemu </td>
                                            @else
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->role_id }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td><a href="admin-pengguna/delete/{{ $user->id }}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                            @endif
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