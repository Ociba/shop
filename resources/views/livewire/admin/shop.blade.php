<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                    <button onclick="Livewire.emit('openModal', 'admin.add-shop-items')" class="btn btn-info  m-l-15 text-white mb-3"><i class="fa fa-plus-circle"></i> Add Shop Items</button>
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
                        <input type="text" class="form-control"  wire:model="search">
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="report-table" class="table table-bordered table-striped mb-0">
                    <thead>
                        <tr class="text-center">
                        <th scope="col" wire:click="sortBy('shops.id')" style="cursor: pointer;">No
                            @include('partials._sort-icon',['field'=>'shops.id'])
                        </th>
                        <th scope="col" wire:click="sortBy('item')" style="cursor: pointer;">Item Category
                            @include('partials._sort-icon',['field'=>'item'])
                        </th>
                        <th scope="col" wire:click="sortBy('item_name')" style="cursor: pointer;">Item Name
                            @include('partials._sort-icon',['field'=>'item_name'])
                        </th>
                        <th scope="col" wire:click="sortBy('price')" style="cursor: pointer;">Price
                            @include('partials._sort-icon',['field'=>'price'])
                        </th>
                        <th scope="col" wire:click="sortBy('number')" style="cursor: pointer;">Number
                            @include('partials._sort-icon',['field'=>'number'])
                        </th>
                        <th scope="col" wire:click="sortBy('discount')" style="cursor: pointer;">Discount
                            @include('partials._sort-icon',['field'=>'discount'])
                        </th>
                        <th scope="col" wire:click="sortBy('new_price	')" style="cursor: pointer;">New Price
                            @include('partials._sort-icon',['field'=>'new_price	'])
                        </th>
                        <th scope="col" wire:click="sortBy('description')" style="cursor: pointer;">Description
                            @include('partials._sort-icon',['field'=>'description'])
                        </th>
                        <th scope="col" wire:click="sortBy('photo')" style="cursor: pointer;">Photo
                            @include('partials._sort-icon',['field'=>'photo'])
                        </th>
                        <th scope="col" wire:click="sortBy('classification')" style="cursor: pointer;">Classification
                            @include('partials._sort-icon',['field'=>'classification'])
                        </th>
                        <th scope="col" wire:click="sortBy('status')" style="cursor: pointer;">Status
                            @include('partials._sort-icon',['field'=>'status'])
                        </th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($shop_items as $i=>$items)
                        <tr>
                            <td> {{$shop_items->firstItem() + $i}}</td>
                            <td hidden>{{$items->id}}</td>
                            <td>{{$items->item}}</td>
                            <td>{{$items->item_name}}</td>
                            <td>{{ number_format($items->price)}}</td>
                            <td>{{$items->number}}</td>
                            <td>{{$items->discount}}</td>
                            <td>{{ number_format($items->new_price)}}</td>
                            <td>{{$items->description}}</td> 
                            <td><img src="{{ asset('storage/shop_items_photos/'.$items->photo)}}" style="width:40px;height:40px;"></td>
                            <td style="text-transform:capitalize">{{$items->classification}}</td>
                            <td>{{$items->status}}</td>
                            <td>
                                <a href="/admin/edit/{{$items->id}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                <a href="#" class="btn btn-success btn-sm" onclick="Livewire.emit('openModal', 'admin.add-shop-discount',{{ json_encode(['shop_id' => $items->id])}})"><i class="feather icon-plus"></i>&nbsp;Add Discount </a>
                                <a href="/admin/delete-accomodation/{{$items->id}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt-2">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      Showing {{$shop_items->firstItem()}} to {{$shop_items->lastItem()}} out of {{$shop_items->total()}} items
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 ml-0">
                      {{$shop_items->links()}}
                    </div>
            </div>
        </div>
    </div>
</div>
