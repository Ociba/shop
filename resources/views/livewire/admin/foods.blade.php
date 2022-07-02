<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="card">
        <div class="card-body">
        @if(session()->has('success'))
        <div class="card-header bg-success">
            <h4 class="mb-0 text-white">{{session('success')}}</h4>
        </div>
        @endif
            <div class="row align-foods-center m-l-0">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                    <button onclick="Livewire.emit('openModal', 'admin.add-food')" class="btn btn-info  m-l-15 text-white mb-3"><i class="fa fa-plus-circle"></i> Add foods</button>
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
                    <div class="form-group col-sm-6 align-foods-right">
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
                        <th scope="col" wire:click="sortBy('food.id')" style="cursor: pointer;">No
                            @include('partials._sort-icon',['field'=>'food.id'])
                        </th>
                        <th scope="col" wire:click="sortBy('name')" style="cursor: pointer;">Owner
                            @include('partials._sort-icon',['field'=>'name'])
                        </th>
                        <th scope="col" wire:click="sortBy('food_type')" style="cursor: pointer;">Food Type
                            @include('partials._sort-icon',['field'=>'food_type'])
                        </th>
                        <th scope="col" wire:click="sortBy('amount')" style="cursor: pointer;">Amount
                            @include('partials._sort-icon',['field'=>'amount'])
                        </th>
                        <th scope="col" wire:click="sortBy('discount_percentage')" style="cursor: pointer;">% Discount
                            @include('partials._sort-icon',['field'=>'discount_percentage'])
                        </th>
                        <th scope="col" wire:click="sortBy('new_amount')" style="cursor: pointer;">New amount
                            @include('partials._sort-icon',['field'=>'new_amount'])
                        </th>
                        <th scope="col" wire:click="sortBy('ingredients')" style="cursor: pointer;">Description
                            @include('partials._sort-icon',['field'=>'ingredients'])
                        </th>
                        <th scope="col" wire:click="sortBy('photo')" style="cursor: pointer;">Photo
                            @include('partials._sort-icon',['field'=>'photo'])
                        </th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($get_food as $i=>$foods)
                        <tr>
                            <td> {{$get_food->firstItem() + $i}}</td>
                            <td hidden>{{$foods->id}}</td>
                            <td>{{$foods->name}}</td>
                            <td>{{$foods->food_type}}</td>
                            <td>{{ number_format($foods->amount)}}</td>
                            <td>{{$foods->discount_percentage}}</td>
                            <td>{{ number_format($foods->new_amount)}}</td>
                            <td>{{$foods->ingredients}}</td>
                            <td><img src="{{ asset('storage/shop_items_photos/'.$foods->photo)}}" style="width:40px;height:40px;"></td>
                            
                            <td>
                                <a href="/admin/edit/{{$foods->id}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                               
                                <a href="/admin/delete-accomodation/{{$foods->id}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt-2">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      Showing {{$get_food->firstItem()}} to {{$get_food->lastItem()}} out of {{$get_food->total()}} Items
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 ml-0">
                      {{$get_food->links()}}
                    </div>
            </div>
        </div>
    </div>
</div>
