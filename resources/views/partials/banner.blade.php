<section id="banner">
  <div class="container">
    <nav class="nav d-flex justify-content-around">
      @foreach ($banner as $item)
      <a class="nav-link d-flex" href="#">
        <img src="{{Vite::asset('resources/img/'.$item['src'])}}" alt="{{$item['name']}}" />
        <div class="align-self-center">{{$item['name']}}</div>
      </a>
      @endforeach
    </nav>
  </div>
  <!-- /.container -->
</section>
<!-- /#banner -->