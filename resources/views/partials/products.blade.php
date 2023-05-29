<section id="products">
    <div class="container pt-5 pb-3">
        <button class="btn rounded-0 px-4 position-relative" style="bottom: 4rem; right: 1rem">
            <h4 class="mb-0">CURRENT SERIES</h4>
        </button>
        <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-3 pb-4">
            @foreach($comics as $comic)
            <div class="col">
                <div class="product">
                    <img src="{{ $comic['thumb'] }}" />
                    <div class="title">{{ $comic['title'] }}</div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- /.row -->
        <button class="btn rounded-0 m-auto px-5">LOAD MORE</button>
    </div>
    <!-- /.container -->
</section>
<!-- /#products -->