<div class="carousel-item {{ $active }}">
    @if(is_null($urltoimage))
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/>
        </svg>
    @else
        <img src="{{ $urltoimage }}" class="d-block w-100" alt="...">
    @endif
    <div class="container">
      <div class="carousel-caption text-left">
        <h1>{{ $title }}</h1>
        <p>{{ $description }}</p>
        <p><a class="btn btn-lg btn-primary" href="{{ url('/showHeadline/'.$index)}}" role="button">Read more...</a></p>
      </div>
    </div>
</div>