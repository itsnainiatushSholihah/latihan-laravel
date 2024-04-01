@extends('template.index')

@section('title', 'home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleInterval" class="carousel slide caraousel mx-auto" data-bs-ride="carousel">
                <div class="carousel-inner caraousel">
                  <div class="carousel-item active" data-bs-interval="100">
                    <img src="k.jpg" class="d-block w-100 border border-4 border-black ukuran" alt="gambar1">
                  </div>
                  <div class="carousel-item" data-bs-interval="100">
                    <img src="k2.jpg" class="d-block w-100 border border-4 border-black" alt="gambar2">
                  </div>
                  <div class="carousel-item"  data-bs-interval="100">
                    <img src="k3.jpg" class="d-block w-100 border border-4 border-black" alt="gambar3">
                  </div>
                </div>
                {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button> --}}
              </div>
        </div>
    </div>
</div>
  

@endsection