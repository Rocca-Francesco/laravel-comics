@extends('partials.layout')

@section('content')
    <div class="bg-dark py-4">

      <div class="container">
      <div class="row row-cols-6">
        @foreach ($comics as $key => $comic)
        <a href="{{ route('comic-detail', ['index' => $key])}}">
            <div class="col g-4 text-light text-center">
              <img src="{{ $comic["thumb"] }}" alt="">
              <h4 class="titleComics py-2">{{ $comic["title"] }}</h4>
            </div>
        </a>
        @endforeach
      </div>
    </div>
    </div>
@endsection