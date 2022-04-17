@section('title','Post Page')
@include('layouts.website.master.header')

<div class="site-cover site-cover-sm same-height overlay single-page"
    style="background-image: url('{{ asset('storage/'.$singlepost->image) }}');">
    <div class="container">
        <div class="row same-height justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="post-entry text-center">
                    <span class="post-category text-white bg-success mb-3">{{ $singlepost->category->name }}</span>
                    <h1 class="mb-4"><a>{{ $singlepost->title }}</a></h1>
                    <div class="post-meta align-items-center text-center">
                        <!-- <figure class="author-figure mb-0 mr-3 d-inline-block"><img
                                src="{{ asset('images/person_1.jpg') }}" alt="Image"
                                class="img-fluid"></figure> -->
                        <span class="d-inline-block mt-1">By {{ $singlepost->user->name }}</span>
                        <span>&nbsp;-&nbsp;
                            {{ \Carbon\Carbon::createFromTimestamp(strtotime($singlepost->published_at))->format('M d, Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="site-section py-lg">
    <div class="container">
        <div class="row blog-entries element-animate">

            <div class="col-md-12 col-lg-8 main-content">
                <div class="post-content-body">
                    {!!$singlepost->description!!}
                </div>
                <div class="pt-5">
                    <p>Categories: <a href="#">{{ $singlepost->category->name }}</a> Tags: <a
                            href="#">{{ $singlepost->tag->name }}</a></p>
                </div>
                <div class="pt-5">
                    <div id="disqus_thread">

                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-4 sidebar">
                <div class="sidebar-box search-form-wrap">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>
                <!-- END sidebar-box -->

                <!-- Popular post section -->
                <div class="sidebar-box">
                    <h3 class="heading">Popular Posts</h3>
                    <div class="post-entry-sidebar">
                        <ul>
                            @foreach($popularpost as $postpopular)
                                <li>
                                    <a
                                        href="{{ route('website.post',['slug'=>$postpopular->slug]) }}">
                                        <img style="height:50px;width:50px;" src="{{ asset('storage/'.$postpopular->image) }}"
                                            alt="Image placeholder" class="mr-4">
                                        <div class="text">
                                            <h4>{{ $postpopular->category->name }}</h4>
                                            <div class="post-meta">
                                                <span
                                                    class="mr-2">{{ \Carbon\Carbon::createFromTimestamp(strtotime($postpopular->published_at))->format('M d, Y') }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- End popular post section -->

                <!-- Categorys Section -->
                <!-- <div class="sidebar-box">
              <h3 class="heading">Categories</h3>
              <ul class="categories">
                <li><a href="#">Food <span>(12)</span></a></li>
              </ul>
            </div> -->
                <!-- End Categorys Section -->

                <!-- Tag list Section -->
                <!-- <div class="sidebar-box">
              <h3 class="heading">Tags</h3>
              <ul class="tags">
                
                <li><a href="#">Travel</a></li>
              </ul>
            </div>
          </div> -->
                <!-- End Tag list Section -->

            </div>
        </div>
</section>


<script>
    (function () { // DON'T EDIT BELOW THIS LINE
        var d = document,
            s = d.createElement('script');
        s.src = 'https://laravelblog-zyqkkdlcip.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();

</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
        Disqus.</a></noscript>

@include('layouts.website.master.footer')
