<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                    <button onclick="Livewire.emit('openModal', 'admin.add-blog-information')" class="btn btn-info  m-l-15 text-white mb-3"><i class="fa fa-plus-circle"></i> Add Blog</button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group col-sm-6">
                        <label class="form-label">Entries</label>
                        <select class="custom-select" wire:model="perPage">
                            <option>10</option>
                            <option>20</option>
                            <option>30</option>
                            <option>40</option>
                            <option>50</option>
                            <option>60</option>
                            <option>70</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                </div>
                <div class="col-sm-5">
                    <div class="form-group col-sm-6 align-items-right">
                        <label class="form-label">Search</label>
                        <input type="text" class="form-control" wire:model="search">
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="report-table" class="table table-bordered table-striped mb-0">
                    <thead>
                        <tr class="text-center">
                        <th scope="col" wire:click="sortBy('blog.id')" style="cursor: pointer;">No
                            @include('partials._sort-icon',['field'=>'blog.id'])
                        </th>
                        <th scope="col" wire:click="sortBy('title')" style="cursor: pointer;">Title
                            @include('partials._sort-icon',['field'=>'title'])
                        </th>
                        <th scope="col" wire:click="sortBy('content')" style="cursor: pointer;">Content
                            @include('partials._sort-icon',['field'=>'content'])
                        </th>
                        <th scope="col" wire:click="sortBy('image')" style="cursor: pointer;">Image
                            @include('partials._sort-icon',['field'=>'image'])
                        </th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($get_blog as $i=>$blog)
                        <tr>
                            <td> {{$get_blog->firstItem() + $i}}</td>
                            <td hidden>{{$blog->id}}</td>
                            <td>{{$blog->title}}</td>
                            <td>{{$blog->content}}</td>
                            <td><img src="{{ asset('storage/blog_photos/'.$blog->image)}}" style="width:60px; height:40px;"></td>
                            <td>
                                <a href="/admin/edit/{{$blog->id}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                               
                                <a href="/admin/delete-accomodation/{{$blog->id}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt-2">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      Showing {{$get_blog->firstItem()}} to {{$get_blog->lastItem()}} out of {{$get_blog->total()}} items
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 ml-0">
                      {{$get_blog->links()}}
                    </div>
            </div>
        </div>
    </div>
</div>
