<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                <button onclick="Livewire.emit('openModal', 'admin.add-promotion-items')" class="btn btn-info  m-l-15 text-white mb-3"><i class="fa fa-plus-circle"></i> Add promotion Items</button>
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
                        <th scope="col" wire:click="sortBy('promotions.id')" style="cursor: pointer;">No
                            @include('partials._sort-icon',['field'=>'promotions.id'])
                        </th>
                        <th scope="col" wire:click="sortBy('image')" style="cursor: pointer;">promotion Photo
                            @include('partials._sort-icon',['field'=>'image'])
                        </th>
                        <th scope="col" wire:click="sortBy('created_at')" style="cursor: pointer;">Uploaded On
                            @include('partials._sort-icon',['field'=>'created_at'])
                        </th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($get_promotion_items as $i=>$promotion)
                        <tr>
                            <td> {{$get_promotion_items->firstItem() + $i}}</td>
                            <td hidden>{{$promotion->id}}</td>
                            <td><img style="width:80px; height:40px" src="{{ asset('storage/promotion/'.$promotion->image)}}"></td>
                            <td>{{$promotion->created_at}}</td>
                            <td>
                                <a href="/promotion/delete-promotion/{{$promotion->id}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt-2">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      Showing {{$get_promotion_items->firstItem()}} to {{$get_promotion_items->lastItem()}} out of {{$get_promotion_items->total()}} items
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 ml-0">
                      {{$get_promotion_items->links()}}
                    </div>
            </div>
        </div>
    </div>
</div>
