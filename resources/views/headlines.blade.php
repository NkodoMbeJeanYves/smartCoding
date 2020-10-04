<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Smart Code Daily News </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/blog/">

    <!-- Bootstrap core CSS -->
<link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('js/toastr/toastr.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="text-muted" href="#">&nbsp;</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Smart Code News</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>{{ $curCountry }}</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">{{ $curCountry }}</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="{{ url('/dashboard')}}">Administration</a>
      <!-- <a class="p-2 text-muted" href="#">U.S.</a>
      <a class="p-2 text-muted" href="#">Technology</a>
      <a class="p-2 text-muted" href="#">Design</a>
      <a class="p-2 text-muted" href="#">Culture</a>
      <a class="p-2 text-muted" href="#">Business</a>
      <a class="p-2 text-muted" href="#">Politics</a>
      <a class="p-2 text-muted" href="#">Opinion</a>
      <a class="p-2 text-muted" href="#">Science</a>
      <a class="p-2 text-muted" href="#">Health</a>
      <a class="p-2 text-muted" href="#">Style</a>
      <a class="p-2 text-muted" href="#">Travel</a> -->
    </nav>
  </div>

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">{{ substr($head->title,0,20) }}</h1>
      <p class="lead my-3">{{ substr($head->description,0,20) }}</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Would you read more ?</a></p>
    </div>
  </div>

  <div class="row mb-2">
    @if(count($data))
        @foreach($data as $index => $article)
            @include('components.article',compact('article','index'))
        @endforeach
    @endif      
    
  </div>
</div>


<!-- /.container -->

<footer class="blog-footer">
  <form class="form-inline" id="subscribe_form">
    <div class="input-group mb-2 mr-sm-2 col-md-4" style="margin-left: 40%;">
      <div class="input-group-prepend">
        <div class="input-group-text">Subscribe To News</div>
      </div>
      <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Your Email Please">
    </div>
    <button type="submit" class="btn btn-primary mb-2" id="subscribe_btn">Subscribe</button>
  </form>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
  <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script> 
  <script src="{{ asset('js/toastr/toastr.js')}}"></script>
  <script src="{{asset('js/toastr/config.js')}}"></script>

  <script>
    let country = {{ $curCountry }}
    toastr.success('You are reading now specific information about ' + country, 'Congratulation')

    function notice(e){
      content = $(e).data('content');
      toastr.warning("That feature is not yet completed, we mean due it just for the test we don't need to go so far", `${content}`)
    }

$(document).ready(function(){

  $('#subscribe_form').submit(
      (e) =>  {
        e.preventDefault()
        // Display a success toast, with a title
        toastr.success('Your request will be treaten very shortly', 'Congratulation')
      }
    )

})

  </script>
</body>
</html>
