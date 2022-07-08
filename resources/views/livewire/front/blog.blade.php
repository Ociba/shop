<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div id="content" class="col-sm-9">
      @foreach($get_blog as $blog)
      <div class="blog1 blog">
        <div class="blog_img"><img src="{{ asset('storage/blog_photos/'.$blog->image)}}" style="width:100%" alt="" /></div>
        <h4 class="p-name"><a href="#">{{$blog->title}}</a></h4>
        <ul class="blog-meta">
          <li><i class="fa fa-clock-o"></i><span class="dt-published">{{ date('F d, Y', strtotime($blog->created_at))}} |  {{Carbon\Carbon::parse($blog->created_at)->diffForHumans()}}</span></li>
          <li> 
           @livewire('front.likes-form')
          </li>
          <li>
          @livewire('front.unlikes-form')
          </li>
          <li><i class="fa fa-user"></i><span><a rel="author" title="Posts by Admin" href="#">Admin</a></span></li>
        </ul>
        <p class="p-summary"></p>
        <p>{{$blog->content}}</p>
      
        <!-- end comment-form --> 
      
    </div>
    @endforeach
</div>
