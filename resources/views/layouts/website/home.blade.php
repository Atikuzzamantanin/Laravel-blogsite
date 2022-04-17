 @section('title','Home Page')
 @include('layouts.website.master.header')


 
 <!-- First post list -->

 <div class="site-section bg-light">
     <div class="container">
         <div class="row align-items-stretch retro-layout-2">

             <div class="col-md-4">
                 @foreach($fisrtpost as $first2)
                     <a href="{{ route('website.post',['slug'=>$first2->slug]) }}"
                         class="h-entry mb-30 v-height gradient"
                         style="background-image: url('{{ asset('storage/'.$first2->image) }}'); height:250px;width:350px;">
                         <div class="text">
                             <h2>{{ $first2->title }}</h2>
                             <span
                                 class="date">{{ \Carbon\Carbon::createFromTimestamp(strtotime($first2->published_at))->format('M d, Y') }}</span>
                         </div>
                     </a>
                 @endforeach
             </div>


             <div class="col-md-4">
                 @foreach($middle as $middle1)
                     <a href="{{ route('website.post',['slug'=>$middle1->slug]) }}"
                         class="h-entry img-5 h-100 gradient"
                         style="background-image: url('{{ asset('storage/'.$middle1->image) }}');height:250px;width:350px;">

                         <div class="text">
                             <div class="post-categories mb-3">
                                 <span class="post-category bg-danger">{{ $middle1->tag->name }}</span>
                             </div>
                             <h2>{{ $middle1->title }}</h2>
                             <span
                                 class="date">{{ \Carbon\Carbon::createFromTimestamp(strtotime($middle1->published_at))->format('M d, Y') }}</span>
                         </div>
                     </a>
                 @endforeach
             </div>


             <div class="col-md-4">
                 @foreach($lastpost as $last1)
                     <a href="{{ route('website.post',['slug'=>$last1->slug]) }}"
                         class="h-entry mb-30 v-height gradient"
                         style="background-image: url('{{ asset('storage/'.$last1->image) }}');">

                         <div class="text">
                             <h2>{{ $last1->title }}</h2>
                             <span
                                 class="date">{{ \Carbon\Carbon::createFromTimestamp(strtotime($last1->published_at))->format('M d, Y') }}</span>
                         </div>
                     </a>
                 @endforeach
             </div>
         </div>
     </div>
 </div>

 <!-- Reacent post list -->
 <div class="site-section">
     <div class="container">
         <div class="row mb-5">
             <div class="col-12">
                 <h2>Recent Posts</h2>
             </div>
         </div>
         <div class="row">
             @foreach($recentpost as $recentposts)
                 <div class="col-lg-4 mb-1">
                     <div class="entry2">
                         <a
                             href="{{ route('website.post',['slug'=>$recentposts->slug]) }}"><img
                             style="height:250px;width:350px;"
                                 src="{{ asset('storage/'.$recentposts->image) }}" alt="Image"
                                 class="img-fluid rounded"></a>
                         <div class="excerpt">
                             <span
                                 class="post-category text-white bg-secondary mb-1">{{ $recentposts->category->name }}</span>

                             <h2><a
                                     href="{{ route('website.post',['slug'=>$recentposts->slug]) }}">{{ $recentposts->title }}</a>
                             </h2>
                             <div class="post-meta align-items-center text-left clearfix">
                                 <!-- <figure class="author-figure mb-0 mr-1 float-left"><img
                                         src="{{ asset('images/person_1.jpg') }}" alt="Image"
                                         class="img-fluid"></figure> -->
                                 <span class="d-inline-block mt-1">By <a
                                         href="#">{{ $recentposts->user->name }}</a></span>
                                 <span>&nbsp;-&nbsp;{{ \Carbon\Carbon::createFromTimestamp(strtotime($recentposts->published_at))->format('M d, Y') }}</span>
                             </div>
                             <p>{!! \Illuminate\Support\Str::words($recentposts->description, 30) !!}</p>
                             <a
                                 href="{{ route('website.post',['slug'=>$recentposts->slug]) }}"> Read
                                 More</a>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>

         <div class="row text-center pt-5 border-top">
             <div class="col-md-12">
                 {{ $recentpost->links() }}
                 <!-- <div class="custom-pagination">
              <span>1</span>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <span>...</span>
              <a href="#">15</a>
            </div> -->
             </div>
         </div>

     </div>
 </div>
 <!-- End Reacent post list -->


 <!-- footer post -->
 <div class="site-section bg-light">
     <div class="container">

         <div class="row align-items-stretch retro-layout">

             <div class="col-md-5 order-md-2">
                 @foreach($footerpost as $footer1)
                     <a href="{{ route('website.post',['slug'=>$footer1->slug]) }}"
                         class="hentry img-1 h-100 gradient"
                         style="background-image: url('{{ asset('storage/'.$footer1->image) }}');">
                         <span class="post-category text-white bg-danger">{{ $footer1->tag->name }}</span>
                         <div class="text">
                             <h2>{{ $footer1->title }}</h2>
                             <span>{{ \Carbon\Carbon::createFromTimestamp(strtotime($footer1->published_at))->format('M d, Y') }}</span>
                         </div>
                     </a>
                 @endforeach
             </div>

             <div class="col-md-7">
                 @foreach($middlefooter as $middfooter)
                     <a href="{{ route('website.post',['slug'=>$middfooter->slug]) }}"
                         class="hentry img-2 v-height mb30 gradient"
                         style="background-image: url('{{ asset('storage/'.$middfooter->image) }}');">
                         <span class="post-category text-white bg-success">{{ $middfooter->tag->name }}</span>
                         <div class="text text-sm">
                             <h2>{{ $middfooter->title }}</h2>
                             <span>{{ \Carbon\Carbon::createFromTimestamp(strtotime($middfooter->published_at))->format('M d, Y') }}</span>
                         </div>
                     </a>
                 @endforeach
                 <div class="two-col d-block d-md-flex">
                     @foreach($lastfooter as $lastfooter)
                         <a href="{{ route('website.post',['slug'=>$lastfooter->slug]) }}"
                             class="hentry v-height img-2 gradient"
                             style="background-image: url('{{ asset('storage/'.$lastfooter->image) }}');">
                             <span class="post-category text-white bg-primary">{{ $lastfooter->tag->name }}</span>
                             <div class="text text-sm">
                                 <h2>{{ $lastfooter->title }}</h2>
                                 <span>{{ \Carbon\Carbon::createFromTimestamp(strtotime($lastfooter->published_at))->format('M d, Y') }}</span>
                             </div>
                         </a>
                     @endforeach

                 </div>
             </div>

         </div>
     </div>
     <!-- endfooter post -->

     @include('layouts.website.master.footer')
