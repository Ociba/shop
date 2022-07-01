<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                    <button onclick="Livewire.emit('openModal', 'admin.add-shop-items-category')" class="btn btn-info  m-l-15 text-white mb-3"><i class="fa fa-plus-circle"></i> Add Category</button>
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
                        <th scope="col" wire:click="sortBy('shop_items_categories.id')" style="cursor: pointer;">No
                            @include('partials._sort-icon',['field'=>'shop_items_categories.id'])
                        </th>
                        <th scope="col" wire:click="sortBy('item')" style="cursor: pointer;">Category
                            @include('partials._sort-icon',['field'=>'item'])
                        </th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($all_shop_items_categories as $i=>$categories)
                        <tr>
                            <td> {{$all_shop_items_categories->firstItem() + $i}}</td>
                            <td hidden>{{$categories->id}}</td>
                            <td>{{$categories->item}}</td>
                            <td>
                                <a href="/admin/edit/{{$categories->id}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                               
                                <a href="/admin/delete-accomodation/{{$categories->id}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt-2">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      Showing {{$all_shop_items_categories->firstItem()}} to {{$all_shop_items_categories->lastItem()}} out of {{$all_shop_items_categories->total()}} items
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 ml-0">
                      {{$all_shop_items_categories->links()}}
                    </div>
            </div>
        </div>
    </div>
</div>
