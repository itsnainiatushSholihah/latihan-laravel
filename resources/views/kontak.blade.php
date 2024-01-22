<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>

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

    <div class="container-fluid warna3 pt-5 pb-5 label">
      <div class="mb-3 col-sm-4 label">
        <label for="exampleInputEmail1" class="form-label text-light">NAMA</label>
        <input type="Nama" class="form-control border" id="exampleInputNama" aria-describedby="emailHelp">
      </div>
      <div class="mb-3 col-sm-4 label">
        <label for="exampleInputPassword1" class="form-label text-light ">EMAIL</label>
        <input type="Email" class="form-control border" id="exampleInpuEmail">
      </div>
      <div class="mb-3 col-sm-4 label">
        <label for="exampleInputPassword1" class="form-label text-light">PESAN</label>
        <input type="Pesan" class="form-control border2" id="exampleInputPesan">
      </div>
      <button type="submit" class="btn btn-primary text-black">SUBMIT</button>
    </div>

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.063966946049!2d111.28677837079918!3d-7.676272659032975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7991fb430ee165%3A0x488480bca3702ec1!2sBanran%2C%20Sumberagung%2C%20Kec.%20Plaosan%2C%20Kabupaten%20Magetan%2C%20Jawa%20Timur%2063361!5e0!3m2!1sid!2sid!4v1700658225288!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="peta"></iframe>
    
    <div class="warna2 warna3" style="padding-bottom: 5px; padding-top: 20px;">
      <p style="text-align: center;">Copyright @Itsna 2023</p>
    </div>

    <script src="{{asset("bootstrap/js/bootstrap.bundle.js")}}">
    

</body>
</html>