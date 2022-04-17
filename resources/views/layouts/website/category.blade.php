
@section('title','Category Page')
@include('layouts.website.master.header')

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <span>Category</span>
                <h3>{{ $category->name }}</h3>
                <p>{{ $category->description }}</p>
            </div>
        </div>
    </div>
</div>
 <!-- Category Post list -->
 <div class="site-section">
     <div class="container">
         <div class="row mb-5">
             <div class="col-12">
                 <h2>Recent Posts</h2>
             </div>
         </div>
         <div class="row">
         @foreach($posts as $post)
                 <div class="col-lg-4 mb-1">
                     <div class="entry2">
                         <a
                             href="{{ route('website.post',['slug'=>$post->slug]) }}"><img
                             style="height:250px;width:350px;"
                                 src="{{ asset('storage/'.$post->image) }}" alt="Image"
                                 class="img-fluid rounded"></a>
                         <div class="excerpt">
                             <span
                                 class="post-category text-white bg-secondary mb-1">{{ $post->category->name }}</span>

                             <h2><a
                                     href="{{ route('website.post',['slug'=>$post->slug]) }}">{{ $post->title }}</a>
                             </h2>
                             <div class="post-meta align-items-center text-left clearfix">
                                 <!-- <figure class="author-figure mb-0 mr-1 float-left"><img
                                         src="{{ asset('images/person_1.jpg') }}" alt="Image"
                                         class="img-fluid"></figure> -->
                                 <span class="d-inline-block mt-1">By <a
                                         href="#">{{ $post->user->name }}</a></span>
                                 <span>&nbsp;-&nbsp;{{ \Carbon\Carbon::createFromTimestamp(strtotime($post->published_at))->format('M d, Y') }}</span>
                             </div>
                             <p>{!! \Illuminate\Support\Str::words($post->description, 30) !!}</p>
                             <a
                                 href="{{ route('website.post',['slug'=>$post->slug]) }}"> Read
                                 More</a>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>

         <div class="row text-center pt-5 border-top">
             <div class="col-md-12">
             {{ $posts->links() }}
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
 <!-- End Category post list -->


@include('layouts.website.master.footer')
