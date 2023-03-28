<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href=" {{ Vite::asset('resources/img/favicon.ico')}} ">
  <title> {{ env('APP_NAME') }} </title>

  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
</head>
<body>
  <div class="container">
    <div class="text-end ">
      <span class="me-4">DC POWER&trade; VISA&reg;</span>
      <span class="dropdown-toggle">ADDITIONAL DC SITES</span>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" class="logoNav" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">CHARACTERS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">COMICS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">MOVIES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">TV</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">GAMES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">COLLECTICABLES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">VIDEO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">FANS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">NEWS</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            SHOP
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<div class="jumbotron">
</div>


<section id="shoppingZone">
      <div>
        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="digital-comics">
        <span>DIGITAL COMICS</span>
      </div>
      <div>
        <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="comics-merchandise">
        <span>DC MERCHANDISE</span>
      </div>
      <div>
        <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="comics-shop-locator">
        <span>SUBSCRIPTION</span>
      </div>
      <div>
        <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="comics-subscriptions">
        <span>COMIC SHOP LOCATOR</span>
      </div>
</section>


<footer>
    <section id="footerLinks">
      <div>
        <h2>DC COMICS</h2>
        <ul>
          <li>Characters</li>
          <li>Comics</li>
          <li>Movies</li>
          <li>TV</li>
          <li>Games</li>
          <li>Video</li>
          <li>News</li>
        </ul>

        <h2>SHOP</h2>
        <ul>
          <li>Shop DC</li>
          <li>Shop DC Collecticables</li>
        </ul>
      </div>

      <div>
        <h2>DC</h2>
        <ul>
          <li>Terms Of Use</li>
          <li>Privacy policy (New)</li>
          <li>Ad Choices</li>
          <li>Advertising</li>
          <li>Jobs</li>
          <li>Subscriptions</li>
          <li>Talent Workshops</li>
          <li>CPSC Certificates</li>
          <li>Ratings</li>
          <li>Shop Help</li>
          <li>Contact Us</li>
        </ul>
      </div>

      <div>
        <h2>SITES</h2>
        <ul>
          <li>DC</li>
          <li>MAD Magazine</li>
          <li>DC Kids</li>
          <li>DC Universe</li>
          <li>DC Power VISA</li>
        </ul>
      </div>
    </section>


    <section id="utilsSocials">
      <button type="button">SIGN-UP NOW!</button>
      <div>
        <span>FOLLOW US</span>
        <span>
          <img src="{{ Vite::asset('resources/img/footer-facebook.png')}}" alt="facebook">
        </span>
        <span>
          <img src="{{ Vite::asset('resources/img/footer-twitter.png')}}" alt="twitter">
        </span>
        <span>
          <img src="{{ Vite::asset('resources/img/footer-youtube.png')}}" alt="youtube">
        </span>
        <span>
          <img src="{{ Vite::asset('resources/img/footer-pinterest.png')}}" alt="pinterest">
        </span>
        <span>
          <img src="{{ Vite::asset('resources/img/footer-periscope.png')}}" alt="periscope">
        </span>
      </div>
    </section>
  </footer>
</body>
</html>