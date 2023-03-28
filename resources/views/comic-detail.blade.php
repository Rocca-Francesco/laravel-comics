@extends('partials.layout')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-8">
          <h2> {{ $comic["title"] }} </h2>
          <div>
            <span> {{ $comic["price"] }} </span>
            <span>AVAILABLE</span>
            <span class="dropdown-toggle">Check Avaibility</span>
          </div>
          <p> {{ $comic["description"] }} </p>
        </div>
        <div class="col-4">
          <img class="img-fluid" src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
        </div>
      </div>
    </div>
    <div class="bg-light">
      <div class="container">
        <div class="row">
        <div class="col-6">
          <h4>Talent</h4>
          <hr>
          <div>
            <h5>Art by:</h5>
            @foreach ($comic["artists"] as $artists)
              @if(!$loop->last)
              <span>{{$artists}},</span>
              @endif
              @if($loop->last)
              <span>{{$artists}}</span>
              @endif
            @endforeach
            <hr>
          </div>
          <div>
            <h5>Written by:</h5>
            @foreach ($comic["writers"] as $writers)
              @if(!$loop->last)
              <span>{{$writers}},</span>
              @endif
              @if($loop->last)
              <span>{{$writers}}</span>
              @endif
            @endforeach
            <hr>
          </div>
        </div>
        <div class="col-6">
          <h4>Specs</h4>
          <hr>
          <div>
            <h5>Series:</h5>
            <span> {{$comic["series"]}} </span>
            <hr>
          </div>
          <div>
            <h5>U.S. Price:</h5>
            <span> {{$comic["price"]}} </span>
            <hr>
          </div>
          <div>
            <h5>On Sale Date:</h5>
            <span> {{$comic["sale_date"]}} </span>
            <hr>
          </div>
        </div>
      </div>
      </div>
    </div>
@endsection