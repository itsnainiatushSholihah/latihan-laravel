<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('main.css')}}">

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
                <a class="nav-link warna2" aria-current="page" href="/home" class="tulisan">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link warna2" aria-current="page" href="/about">About Me </a>
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
            <h2 class="fw-semibold text-black subtitle ms-5">ABOUT ME</h2>
          </div>
            
          <p style=" text-align: justify;" class="fw-semibold"> <img style="float: left;" class="mb-0" src="{{ asset("images/download.jfif")}}" alt="kucing">
            Hallo semua!, perkenalkan nama saya itsnainiatush Sholihah, biasa dipanggil itsna.
            saya suka semua yang saya suka, tapi tergantung mood juga mwehehe<br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque dolor temporibus sunt magnam quam quas iure quasi? Cum omnis iste, maxime et, obcaecati itaque ratione vel aspernatur veritatis reiciendis repellendus?,
            Lorem ipsum dolor sit amet consectetur adipisicing elit. A mollitia error aperiam quaerat cum! Ipsa quas amet ipsam laudantium! Accusamus unde doloribus tempora explicabo aspernatur voluptatem laudantium deleniti architecto optio.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates hic natus impedit nulla sint accusamus tenetur ut tempore, quo esse expedita officia reiciendis excepturi, obcaecati ab! Error quas vitae sunt.<br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas adipisci et maxime tempore possimus numquam harum doloremque repudiandae minus, perspiciatis aliquam a sit rerum omnis nesciunt provident ipsam sunt quidem!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis corrupti nostrum modi quo architecto reiciendis officia illum, amet illo excepturi deleniti soluta aliquid porro omnis hic nisi asperiores praesentium distinctio.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum hic, tenetur labore ea id modi animi esse praesentium ipsa quas odit reprehenderit, asperiores omnis, rerum alias ratione ad magni quibusdam.
         </p>
        </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.063966946049!2d111.28677837079918!3d-7.676272659032975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7991fb430ee165%3A0x488480bca3702ec1!2sBanran%2C%20Sumberagung%2C%20Kec.%20Plaosan%2C%20Kabupaten%20Magetan%2C%20Jawa%20Timur%2063361!5e0!3m2!1sid!2sid!4v1700658225288!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="peta"></iframe>
    
    <div class="warna2 warna3" style="padding-bottom: 5px; padding-top: 20px;">
      <p style="text-align: center;">Copyright @Itsna 2023</p>
    </div>
        
    <script src="{{asset("bootstrap/js/bootstrap.js")}}">

</body>
</html>