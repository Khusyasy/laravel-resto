@extends('templates/main')

@section('title', 'Drink Menu')

@section('jumbo-text', 'Drink Menu')
@section('jumbo-image', "'images/menu.jpg'")

@section('content')
    {{-- <div class="col-4 my-5">
        <img class="img-fluid img-thumbnail" src="{{ asset("images/drinks/icetea.jpg") }}" alt="Ice tea">
    </div>
    <div class="col-8 my-5">
        <h4>Iced Tea</h4>
        <h5>Rp 0.000.000</h5>
        <p>
            Iced tea is a form of cold tea. Though usually served in a glass with ice, it can refer to any tea that has been chilled or cooled. It may be sweetened with sugar, syrup and/or apple slices.
        </p>
    </div>
    <div class="col-4 my-5">
        <img class="img-fluid img-thumbnail" src="{{ asset("images/drinks/orange.jpg") }}" alt="Orange Juice">
    </div>
    <div class="col-8 my-5">
        <h4 class="text-right">Orange Juice</h4>
        <h5>Rp 0.000.000</h5>
        <p>
            Orange juice is a liquid extract of the orange tree fruit, produced by squeezing or reaming oranges. It comes in several different varieties, including blood orange, navel oranges, valencia orange, clementine, and tangerine.
        </p>
    </div> --}}
    @foreach ($drinks as $drink)
        <div class="col-md-4 col-12 my-md-5">
            <img class="img-fluid img-thumbnail" src="{{ asset("images/" . $drink->image) }}" alt="Bakso">
        </div>
        <div class="col-md-8 col-12 my-md-5 my-3">
            <h4 class="text-right">{{ $drink->name }}</h4>
            <h5>Rp. {{ number_format($drink->price) }}</h5>
            <p>{{ $drink->description }}</p>
        </div>
    @endforeach
@endsection