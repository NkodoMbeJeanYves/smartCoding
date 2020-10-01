<div class="container">

    @include('components.alert', compact('class'))
  
<h2>News</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>id</th>
              <th>name</th>
              <th>author</th>
              <th>title</th><!-- 
              <th>description</th>
              <th>url</th>
              <th>urlToImage</th> -->
              <th>content</th>
              <th>Published At</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $key  => $headline)
              <tr>
                <td>{{ $key }}</td>
                <td>{{ isset($headline->id) ? $headline->id : 'id'}}</td>
                <td>{{ isset($headline->name) ? $headline->name : 'name' }}</td>
                <td>{{ $headline->author }}</td>
                <td>{{ $headline->title }}</td><!-- 
                <td>{{ $headline->description }}</td>
                <td>{{ $headline->url }}</td>
                <td>{{ $headline->urlToImage }}</td> -->
                <td>{{ $headline->content }}</td>
                <td>{{ is_null($headline->publishedat) ?'' :$headline->publishedat->diffForHumans() }}</td>
              </tr>
            @endforeach
          
          </tbody>
        </table>
      </div> 
