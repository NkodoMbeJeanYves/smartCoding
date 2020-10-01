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
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="#">&nbsp;</a>
        </div>
        </div>
    </header>
        </div>


        <div class="container">
            @if($sample)
                <div class="card">
                    <h5 class="card-header">{{ $sample->title }}</h5>
                    <div class="card-body">
                        <h5 class="card-title">{{ $sample->name }}</h5>
                        <p class="card-text">{{ $sample->content }}</p>
                        <p class="card-text">{{ $sample->description }}</p>
                        <p class="card-text">{{ $sample->publishedat->diffForHumans() }}</p>
                        <a href="#" class="btn btn-primary"></a>
                    </div>
                </div>
            @else
                <div class="card">
                    <h5 class="card-header">Title</h5>
                    <div class="card-body">
                        <h5 class="card-title">Author</h5>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non quas corrupti odit illo! Temporibus beatae quos, hic sed inventore eius consequatur, quasi possimus eum natus, tempore nulla atque voluptatibus ut.</p>
                        <p class="card-text">description</p>
                        <p class="card-text">{{ now() }}</p>
                        <a href="#" class="btn btn-primary"></a>
                    </div>
                </div>
            @endif    
        </div>

    </body>
</html>

