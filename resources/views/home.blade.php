<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('main.css') }}">
    
</head>
<body>
    
    <nav class="navbar navbar-expand-lg warna3">
        <div class="container-fluid">
          <a class="navbar-brand warna2 jarakatas" href="#">Itsnainiatush Sholihah</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link warna2" aria-current="page" href="#" class="tulisan">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link warna2" aria-current="page" href="/about">About Me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link warna2" aria-current="page" href="/kontak">Contact Me</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
      <div class="head">
    
        <div class="profile">
          <img src="{{asset("images/download.jfif")}}" class="img" alt="my photo">
          <h3>Itsnainiatush Sholihah</h3>
          <p>SOFTWARE ENGINERING | WEB DEVELOPER | COACH</p>
        </div>
      </div>
    
      <div class="container-fluid warna">
        <div class="row">
          <div class="col-12">
            <h2 class="fw-semibold text-black subtitle ms-5">OUR SERVICE</h2>
          </div>
        
    
    
          <div class="col-4 ">
            <div class="card mx-auto" style="width: 18rem;">
              <img src="{{ asset("images/kucing1.jfif")}}" class="card-img-top tinggigambar" alt="miauw">
              <div class="card-body">
                <h5 class="card-title">Cat 1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
              </div>
            </div>
          </div>
    
    
          <div class="col-4">
            <div class="card mx-auto" style="width: 18rem;">
              <img src="{{ asset("images/kucing2.jfif")}}" class="card-img-top tinggigambar" alt="miauw">
              <div class="card-body">
                <h5 class="card-title">Cat 2</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
              </div>
            </div>
          </div>
    
    
    
          <div class="col-4 ">
            <div class="card mx-auto" style="width: 18rem;">
              <img src="{{ asset("images/kucing3.jfif")}}" class="card-img-top tinggigambar" alt="miauw">
              <div class="card-body">
                <h5 class="card-title">Cat 3</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="container-fluid warnabg">
        <div class="row">
          <div class="col-12">
            <h2 class="fw-semibold text-black subtitle ms-5">OUR SERVICE</h2>
          </div>
        
    
    
          <div class="col-4 ">
            <div class="card mx-auto" style="width: 18rem;">
              <img src="{{ asset("images/kucing1.jfif")}}" class="card-img-top tinggigambar" alt="miauw">
              <div class="card-body">
                <h5 class="card-title">Cat 1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
              </div>
            </div>
          </div>
    
    
          <div class="col-4">
            <div class="card mx-auto" style="width: 18rem;">
              <img src="{{ asset("images/kucing2.jfif")}}" class="card-img-top tinggigambar" alt="miauw">
              <div class="card-body">
                <h5 class="card-title">Cat 2</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
              </div>
            </div>
          </div>
    
    
    
          <div class="col-4 ">
            <div class="card mx-auto" style="width: 18rem;">
              <img src="{{ asset("images/kucing3.jfif")}}" class="card-img-top tinggigambar" alt="miauw">
              <div class="card-body">
                <h5 class="card-title">Cat 3</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    <div class="container-fluid">
      <div class="row">
        <div id="carouselExample" class="carousel slide warna">
          <div class="carousel-inner">
            <div class="carousel-item active ">
              <img src="{{asset('images/kucing1.jfif')}}" class="d-block w-100" alt="miauw">
            </div>
            <div class="carousel-item ">
              <img src="{{asset('images/kucing2.jfif')}}" class="d-block w-100" alt="miauw">
            </div>
            <div class="carousel-item ">
              <img src="{{asset('images/kucing3.jfif')}}" class="d-block w-100" alt="miauw">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.063966946049!2d111.28677837079918!3d-7.676272659032975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7991fb430ee165%3A0x488480bca3702ec1!2sBanran%2C%20Sumberagung%2C%20Kec.%20Plaosan%2C%20Kabupaten%20Magetan%2C%20Jawa%20Timur%2063361!5e0!3m2!1sid!2sid!4v1700658225288!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="peta"></iframe>
    
    <div class="warna2 warna3" style="padding-bottom: 5px; padding-top: 20px;">
      <p style="text-align: center;">Copyright @Itsna 2023</p>
    </div>

    <script src="{{asset("bootstrap/js/bootstrap.js")}}">

</body>
</html>