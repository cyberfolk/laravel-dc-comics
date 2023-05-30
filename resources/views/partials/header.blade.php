<header class="bg-white">
    <section id="strip">
        <div class="container d-flex justify-content-end gap-5 pb-1">
            <div class="mt-1" >DC POWER VISA &#174;</div>
            <div class="dropdown mt-1">
                <div class="btn p-0 dropdown-toggle text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    ADDITIONAL DC SITE
                </div>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- /#strips -->

    <nav class="navbar navbar-expand navbar-light bg-light py-0">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img height="80" src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="dc-logo" />
            </a>
            <!-- /.navbar-brand -->
            <ul class="navbar-nav ms-auto gap-3 mt-2">
                @foreach (config('pages') as $page)
                <li class="nav-item">
                    <a  class="nav-link {{Route::currentRouteName() === $page ? 'active' : '' }}" 
                        href="{{Route($page)}}">{{$page}}</a>
                </li>
                @endforeach
                <li class="nav-item">
                    <div class="dropdown ps-1">
                        <button class="btn btn-danger dropdown-toggle py-1 px-2" type="button" id="adminMenu" data-bs-toggle="dropdown">
                            Admin
                        </button>
                        <div class="dropdown-menu" aria-labelledby="adminMenu">
                            <a class="dropdown-item" href="{{route('admin.comics.index')}}">comics</a>
                        </div>
                    </div>
                    <!-- /.dropdown -->
                </li>
                <li class="nav-item">
                    <div class="search_box d-flex align-items-center py-1 ms-5">
                        <input type="text" class="border-0 text-right me-1" placeholder="Search">
                        <svg height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>   
                    </div>
                </li>
            </ul>
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</header>