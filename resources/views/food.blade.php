@extends('templates/main')

@section('title', 'Food Menu')

@section('jumbo-text', 'Food Menu')
@section('jumbo-image', "'images/menu.jpg'")

@section('content')
    {{-- <div class="col-4 my-5">
        <img class="img-fluid img-thumbnail" src="{{ asset("images/foods/rendang.jpg") }}" alt="Rendang">
    </div>
    <div class="col-8 my-5">
        <h4>Rendang</h4>
        <h5>Rp 0.000.000</h5>
        <p>
            Rendang is an Indonesian spicy meat dish originating from the Minangkabau region in West Sumatra, Indonesia. ... Rendang often described as a rich Southeast Asian curry that's made by stewing meat in coconut milk and spices until it becomes tender.
        </p>
    </div>
    <div class="col-4 my-5">
        <img class="img-fluid img-thumbnail" src="{{ asset("images/foods/bakso.jpg") }}" alt="Bakso">
    </div>
    <div class="col-8 my-5">
        <h4 class="text-right">Bakso</h4>
        <h5>Rp 0.000.000</h5>
        <p>
            Bakso or baso is an Indonesian meatball, or a meat paste made from beef surimi. Its texture is similar to the Chinese beef ball, fish ball, or pork ball.
        </p>
    </div> --}}
    @foreach ($foods as $food)
        <div class="col-md-4 col-12 my-md-5">
            <img class="img-fluid img-thumbnail" src="{{ asset("images/" . $food->image) }}" alt="Bakso">
        </div>
        <div class="col-md-8 col-12 my-md-5 my-3">
            <h4 class="text-right">{{ $food->name }}</h4>
            <h5>Rp. {{ number_format($food->price) }}</h5>
            <p>{{ $food->description }}</p>
        </div>
    @endforeach
@endsection