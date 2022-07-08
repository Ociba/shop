<div>
    {{-- Be like water. --}}
    <div id="content" class="col-sm-6">
      @foreach($get_news as $news)
      <div class="blog1 blog">
        <div class="blog_img"><img src="{{ asset('storage/news_photos/'.$news->photo)}}" style="width:100%" alt="" /></div>
        <h4 class="p-name"><a href="singale-blog.html">{{$news->heading}}</a></h4>
        <ul class="blog-meta">
          <li><i class="fa fa-clock-o"></i><span class="dt-published">{{ date('F d, Y', strtotime($news->created_at))}} |  {{Carbon\Carbon::parse($news->created_at)->diffForHumans()}}</span></li>
          <li>@livewire('front.news-likes-form')</li>
          <li>@livewire('front.news-unlikes-form')</li>
          <li><i class="fa fa-user"></i><span><a rel="author" title="Posts by Admin" href="#">Admin admin</a></span></li>
        </ul>
        <p class="p-summary"></p>
        <p>{{$news->body}}</p>
      
       <!-- end comment-form -->
      @endforeach
    </div>
</div>
