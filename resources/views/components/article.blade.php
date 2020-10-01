<div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">{{ $article->name }}</strong>
          <h4 class="mb-0">{{ substr($article->title,100) }}</h4>
          <div class="mb-1 text-muted">{{ $article->publishedAt }}</div>
          <p class="card-text mb-auto">{{ substr($article->content, 100) }}</p>
          <a href="{{ url('top-headlines/1')}}" class="stretched-link link-item" data-content="{{ $article->name }}" onclick="notice(this)">Read More</a>
        </div>
        <div class="col-auto d-none d-lg-block">
            @if($article->urlToImage != null)
                <img src="{{ $article->urlToImage }}" width="200" height="250" class="img-fluid">
            @else         
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>         
            @endif    
        </div>
      </div>
    </div>