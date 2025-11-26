@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- carausel -->
     <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('img/dadali2.jpg')}}" class=" d-block" alt="..." style="height: 100%; width: 100%;">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/dadali2.jpg')}}" class="d-block" alt="..." style="height: 100%; width: 100%;">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/dadali.webp')}}" class="d-block" alt="..." style="height: 100%; width: 100%;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection

