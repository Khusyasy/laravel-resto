@extends('templates/main')

@section('title', 'Gallery')

@section('jumbo-text', 'Gallery')
@section('jumbo-image', "'images/about.jpg'")

@section('content')
    <div class="col-md-4 col-12 gallery">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/dT_EiC8RMQU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="col-md-4 col-12 gallery">
        <img class="gallery-image" src="{{ asset("images/foods/rendang.jpg") }}" alt="Restaurant">
    </div>
    <div class="col-md-4 col-12 gallery">
        <img class="gallery-image" src="{{ asset("images/gallery/res1.jpg") }}" alt="Restaurant">
    </div>
    <div class="col-md-4 col-12 gallery">
        <img class="gallery-image" src="{{ asset("images/gallery/res3.jpg") }}" alt="Restaurant">
    </div>
    <div class="col-md-4 col-12 gallery">
        <img class="gallery-image" src="{{ asset("images/drinks/icetea.jpg") }}" alt="Restaurant">
    </div>
    <div class="col-md-4 col-12 gallery">
        <img class="gallery-image" src="{{ asset("images/gallery/res2.jpg") }}" alt="Restaurant">
    </div>
    <div class="col-md-4 col-12 gallery">
        <img class="gallery-image" src="{{ asset("images/gallery/res1.jpg") }}" alt="Restaurant">
    </div>
    <div class="col-md-4 col-12 gallery">
        <img class="gallery-image" src="{{ asset("images/foods/bakso.jpg") }}" alt="Restaurant">
    </div>
    <div class="col-md-4 col-12 gallery">
        <img class="gallery-image" src="{{ asset("images/drinks/orange.jpg") }}" alt="Restaurant">
    </div>
@endsection