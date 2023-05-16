{{-- @extends('welcome')
@section('content')


<div class="container" style="margin-top: 30px;">
    <a href="/cart" class="btn btn-primary"><i class="bi bi-cart-plus-fill"></i>Cart</a>
    <a href="/" class="btn btn-primary">Back</a>
</div>

<div class="container">
    <div class="row text-center text-dark">
        <h2 class="mt-5">My Menu</h2>
        <h4 class="mt-1">Drink's</h4>
        
    </div>
    <div class="row my-4 ms-5">
        <div class="col-lg-4 mb-3">
            <div class="card"
                style="padding-bottom:30px; width: 14rem; text-align:center; box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.363);">
                <img src="assets/img/order/tehmaniis.jpg" class="card-img-top" alt="..."
                    style="max-height:160px; min-height:120px">
                <div class="card-body text-center">
                    <h5 class="card-title">Es Teh</h5>
                    <p class="card-text">Rp. 4000</p>
                    <a href="#" class="btn btn-warning w-50 text-light"><b>Buy Now</b></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card"
                style="padding-bottom:20px; width: 14rem; text-align:center; box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.363);">
                <img src="assets/img/order/tehtarikk.jpg" class="card-img-top" alt="..."
                    style="max-height:160px; min-height:120px">
                <div class="card-body text-center">
                    <h5 class="card-title">Teh Tarik</h5>
                    <p class="card-text">Rp. </p>
                    <a href="#" class="btn btn-warning w-50 text-light"><b>Buy Now</b></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card"
                style="padding-bottom:20px; width: 14rem; text-align:center; box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.363);">
                <img src="assets/img/order/jerukperas2.jpg" class="card-img-top" alt="..."
                    style="max-height:160px; min-height:120px">
                <div class="card-body text-center">
                    <h5 class="card-title">Es Jeruk</h5>
                    <p class="card-text">Rp. </p>
                    <a href="#" class="btn btn-warning w-50 text-light"><b>Buy Now</b></a>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-4 ms-5">
        <div class="col-lg-4 mb-3">
            <div class="card"
                style="padding-bottom:30px; width: 14rem; text-align:center; box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.363);">
                <img src="assets/img/order/popice.jpg" class="card-img-top" alt="..."
                    style="max-height:160px; min-height:120px">
                <div class="card-body text-center">
                    <h5 class="card-title">Pop Ice</h5>
                    <p class="card-text">Rp. </p>
                    <a href="#" class="btn btn-warning w-50 text-light"><b>Buy Now</b></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card"
                style="padding-bottom:20px; width: 14rem; text-align:center; box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.363);">
                <img src="assets/img/order/greantea.jpg" class="card-img-top" alt="..."
                    style="max-height:160px; min-height:120px">
                <div class="card-body text-center">
                    <h5 class="card-title">Grean Tea</h5>
                    <p class="card-text">Rp. </p>
                    <a href="#" class="btn btn-warning w-50 text-light"><b>Buy Now</b></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card"
                style="padding-bottom:20px; width: 14rem; text-align:center; box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.363);">
                <img src="assets/img/order/eskopi.jpg" class="card-img-top" alt="..."
                    style="max-height:160px; min-height:120px">
                <div class="card-body text-center">
                    <h5 class="card-title">Es Coffe</h5>
                    <p class="card-text">Rp. </p>
                    <a href="#" class="btn btn-warning w-50 text-light"><b>Buy Now</b></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row text-center text-dark">
        <h2 class="mt-5">My Menu</h2>
        <h4 class="mt-1">Food's</h4>
    </div>
    <div class="row my-4 ms-5">
      <div class="col-lg-4 mb-3">
          <div class="card" style="padding-bottom:30px; width: 14rem; text-align:center; box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.363);">
              <img src="assets/img/food/mieayam1.jpg" class="card-img-top" alt="..."
              style="max-height:160px; min-height:120px">
              <div class="card-body text-center">
                  <h5 class="card-title">Mie Ayam</h5>
                  <p class="card-text">Rp.</p>
                  <a href="#" class="btn btn-warning w-50 text-light"><b>Buy Now</b></a>
              </div>
          </div>
      </div>
      <div class="col-lg-4 mb-3">
          <div class="card" style="padding-bottom:20px; width: 14rem; text-align:center; box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.363);">
              <img src="assets/img/food/baco.jpg" class="card-img-top" alt="..." 
              style="max-height:160px; min-height:120px">
              <div class="card-body text-center">
                  <h5 class="card-title">Baso</h5>
                  <p class="card-text">Rp. </p>
                  <a href="#" class="btn btn-warning w-50 text-light"><b>Buy Now</b></a>
              </div>
          </div>
      </div>
      <div class="col-lg-4 mb-3">
          <div class="card" style="padding-bottom:20px; width: 14rem; text-align:center; box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.363);">
              <img src="assets/img/food/seblak.jpg" class="card-img-top" alt="..."
              style="max-height:160px; min-height:120px">
              <div class="card-body text-center">
                  <h5 class="card-title">Seblak</h5>
                  <p class="card-text">Rp. </p>
                  <a href="#" class="btn btn-warning w-50 text-light"><b>Buy Now</b></a>
              </div>
          </div>
      </div>
    </div>

    <div class="row my-4 ms-5">
        <div class="col-lg-4 mb-3">
            <div class="card" style="padding-bottom:30px; width: 14rem; text-align:center; box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.363);">
                <img src="assets/img/food/teriyakifood.jpg" class="card-img-top" alt="..."
                style="max-height:160px; min-height:120px">
                <div class="card-body text-center">
                    <h5 class="card-title">Chicken Teriyaki</h5>
                    <p class="card-text">Rp. </p>
                    <a href="#" class="btn btn-warning w-50 text-light"><b>Buy Now</b></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card" style="padding-bottom:20px; width: 14rem; text-align:center; box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.363);">
                <img src="assets/img/food/gebetan.jpg" class="card-img-top" alt="..."  
                style="max-height:160px; min-height:120px;">
                <div class="card-body text-center">
                    <h5 class="card-title">Mie Gebetan</h5>
                    <p class="card-text">Rp. </p>
                    <a href="#" class="btn btn-warning w-50 text-light"><b>Buy Now</b></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card" style="padding-bottom:20px; width: 14rem; text-align:center; box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.363);">
                <img src="assets/img/food/batagor.jpg" class="card-img-top" alt="..."
                    style="max-height:160px; min-height:120px">
                <div class="card-body text-center">
                    <h5 class="card-title">Batagor</h5>
                    <p class="card-text">Rp. </p>
                    <a href="#" class="btn btn-warning w-50 text-light"><b>Buy Now</b></a>
                </div>
            </div>
        </div>
      </div>
 </div>    
@endsection --}}

<!DOCTYPE html>
<html>

<head>
    <title>Caffe BDP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-12">
                <div class="dropdown">

                    <button type="button" class="btn btn-warning mt-4" data-toggle="dropdown">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span
                            class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                    </button>

                    <a href="{{'/'}}">
                        <button type="button" class="btn btn-warning mt-4">
                            <i class="bi bi-arrow-left-circle-fill" aria-hidden="true"></i> Back
                        </button>
                    </a>

                    <div class="dropdown-menu">
                        <div class="row total-header-section">
                            @php $total = 0 @endphp
                            @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                            @endforeach
                            <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                                <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                            </div>
                        </div>
                        @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                        <div class="row cart-detail">
                            <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                <img src="{{ $details['image'] }}" style="max-height: 100px; min-height:100px;" />
                            </div>
                            <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                <p>{{ $details['name'] }}</p>
                                <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count">
                                    Quantity:{{ $details['quantity'] }}</span>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br />
    <div class="container">

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @yield('content')
    </div>

    @yield('scripts')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</body>

</html>
