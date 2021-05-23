<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Hasil Pencarian</title>
    <!-- CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container-fluid">
        <div class="container-navbar">
            @include("component.nav_header")
          </div>
        </div>
        <div class="container-header-search">
            <div class="header-top">
                Hasil Pencarian
            </div>
        </div>
        @if (isset($products))
        <section class="section-cardresult">
            <div class="container-result-search">
                <div class="row">
                @if (count($products) > 0) 
                @foreach ($products as $product)
                    <div class="col-2 pt-4">
                        <div class="card">
                            <a href="{{ url('detail-buku/'.$product->id) }}"><img class="img" style="height: 180px; width: 100%" src="storage/image/{{$product->image}}" alt="" ></a>
                            <div class="text-card">
                                <p class="book-title">{{ $product->name }}</p>
                                <p class="book-price">Rp. {{ $product->price }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach 
                @else
                <div class="not-found">Buku tidak ditemukan!</div>
            @endif
            </div>
        </section>
        <div class="pagination-block">
            {{ $products->links() }}
        </div>
        @endif
    @include("component.nav_footer")
    </div>
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous ">
    </script>
    <script src="https://kit.fontawesome.com/9923874ec2.js " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous ">
    </script>
</body>

</html>
