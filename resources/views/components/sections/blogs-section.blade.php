<section id="section-05" class="pt-11 pb-11">
    <div class="container">
        <div class="d-flex align-items-center mb-7 flex-wrap flex-sm-nowrap">
            <h2 class="mb-3 mb-sm-0">
                <span class="font-weight-semibold">Some</span>
                <span class="font-weight-light">Tips & Articles</span>
            </h2>
            <a href="blog-listing-grid#"
               class="link-hover-dark-primary ml-0 ml-sm-auto w-100 w-sm-auto">
                <span class="font-size-md d-inline-block mr-1">All articles</span>
                <i class="fal fa-chevron-right"></i>
            </a>
        </div>
        <div class="row">
            @foreach($blogs as $b)
            <div class="col-md-4 mb-4" data-animate="zoomIn">
                <div class="card border-0">
                    <a href="{{url('./$b->Blog_slug')}}" class="hover-scale">
                        <img src="./assets/images/blog/main-blog-2.jpg" alt="product 1" class="card-img-top image">
                    </a>
                    <div class="card-body px-0">
                        <div class="mb-2"><a href="{{url('./($b->Blog_slug)')}}" class="link-hover-dark-primary">
                            {{$b->Blog_category}}</a>

                        <h5 class="card-title lh-13 letter-spacing-25">
                            <a href="{{$b->Blog_slug}}"
                               class="link-hover-dark-primary text-capitalize">
                                {{$b->Blog_title}}</a>
                        </h5>
                        <ul class="list-inline">
                            <li class="list-inline-item mr-0">
                                <span class="text-gray">{{$b->created_at}}</span>
                            </li>
                            <li class="list-inline-item">
                                <a href="" class="link-hover-dark-primary">{{$b->name}}</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div>
    </div>
</section>