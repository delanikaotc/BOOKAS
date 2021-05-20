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
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>

<body>
    <div class="container-fluid">
        <div class="container-navbar">
            @include("component.nav_header")
          </div>
        </div>
    <!--END Navbar-->

    <div class="section-topbar">
        <div class="container-navbar">
            <div class="row">
              <ul class="navbar-nav ">
                <li class="nav-item ml-4">
                  <a class="nav-link" href="#"><p>Book</p></a>
                </li>
            </ul>
            <ul class="navbar-nav ">
              <li class="nav-item ml-4">
                <a class="nav-link" href="#"><p>Magazine</p></a>
              </li>
            </ul>
            <ul class="navbar-nav ">
              <li class="nav-item ml-4">
                <a class="nav-link" href="#"><p>Brain Storming</p></a>
              </li>
          </ul>
            </div>
        </div>
    </div>

    <!--END Topbar-->

    <div class="section-banner">
        <div class="row">
            <img src="img/bacabuku2.png" alt="">
        </div>
    </div>
    <!--END Banner-->

    <div class="section-midcontent">
        <div class="container-navbar">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                      <h1 class="oren">SERBA Rp. 40.000!</h1>
                      <div class="section-carddalam">
                        <div class="row">
                            @foreach($datum['40000'] as $data)
                                <div class="col-2,5 ml-3">
                                    <div class="card">
                                      <a href="{{ url('detail-buku/'.$data->id) }}"><img style="height: 100px;" src="storage/image/{{$data->image}}" alt=""></a>
                                      <p class="book-title">{{ $data->name }}</p>
                                      <p class="book-price">Rp. {{ $data->price }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-4 ml-auto">
                    <img src="img/bacabuku3.png" alt="">
                </div>
            </div>
        </div>
      </div>

    <!--END content mid-->

    <section class="section-cardcontent">
      <div class="container-navbar">
        <h3>BUKU BEKAS</h3>
        <div class="row">
            @foreach($datum['all'] as $data)
                <div class="col-2 pt-4">
                    <div class="card" >
                      <a href="{{ url('detail-buku/'.$data->id) }}"><img class="img" style="height: 180px; width: 100%" src="storage/image/{{$data->image}}" alt="" ></a>
                      <div class="text-card">
                          <p class="book-title">{{ $data->name }}</p>
                          <p class="book-price">Rp. {{ $data->price }}</p>
                      </div>
                      <button type="submit" class="btn btn-bookas"><p><i class="bi bi-bag-plus-fill"></i> Beli</p></button>
                    </div>
                </div>
            @endforeach
        </div>
      </div>
    </section>
    <!--END card conten-->

    @include("component.nav_footer")

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous ">
    </script>
    <script src="https://kit.fontawesome.com/9923874ec2.js " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous ">
    </script>
</body>
</html>
