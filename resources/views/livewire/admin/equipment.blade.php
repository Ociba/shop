<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="card">
        <div class="card-body">
        @if(session()->has('success'))
        <div class="card-header bg-success">
            <h4 class="mb-0 text-white">{{session('success')}}</h4>
        </div>
        @endif
            <div class="row align-equipments-center m-l-0">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                    <button onclick="Livewire.emit('openModal', 'admin.add-equipments')" class="btn btn-info  m-l-15 text-white mb-3"><i class="fa fa-plus-circle"></i> Add equipments</button>
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
                    <div class="form-group col-sm-6 align-equipments-right">
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
                        <th scope="col" wire:click="sortBy('equipment.id')" style="cursor: pointer;">No
                            @include('partials._sort-icon',['field'=>'equipment.id'])
                        </th>
                        <th scope="col" wire:click="sortBy('name')" style="cursor: pointer;">Owner
                            @include('partials._sort-icon',['field'=>'name'])
                        </th>
                        <th scope="col" wire:click="sortBy('equipment')" style="cursor: pointer;">Equipment Name
                            @include('partials._sort-icon',['field'=>'equipment'])
                        </th>
                        <th scope="col" wire:click="sortBy('quantity')" style="cursor: pointer;">Quantity
                            @include('partials._sort-icon',['field'=>'quantity'])
                        </th>
                        <th scope="col" wire:click="sortBy('price')" style="cursor: pointer;">Price
                            @include('partials._sort-icon',['field'=>'price'])
                        </th>
                        <th scope="col" wire:click="sortBy('discount_amount')" style="cursor: pointer;">Discount Amount
                            @include('partials._sort-icon',['field'=>'discount_amount'])
                        </th>
                        <th scope="col" wire:click="sortBy('equipment_discount')" style="cursor: pointer;">% Discount
                            @include('partials._sort-icon',['field'=>'equipment_discount'])
                        </th>
                        <th scope="col" wire:click="sortBy('description')" style="cursor: pointer;">Description
                            @include('partials._sort-icon',['field'=>'description'])
                        </th>
                        <th scope="col" wire:click="sortBy('photo')" style="cursor: pointer;">Photo
                            @include('partials._sort-icon',['field'=>'photo'])
                        </th>
                        <th scope="col" wire:click="sortBy('status')" style="cursor: pointer;">Status
                            @include('partials._sort-icon',['field'=>'status'])
                        </th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($get_all_equipments as $i=>$equipments)
                        <tr>
                            <td> {{$get_all_equipments->firstItem() + $i}}</td>
                            <td hidden>{{$equipments->id}}</td>
                            <td>{{$equipments->name}}</td>
                            <td>{{$equipments->equipment}}</td>
                            <td>{{$equipments->quantity}}</td>
                            <td>{{ number_format($equipments->price)}}</td>
                            <td>{{number_format($equipments->discount_amount)}}</td>
                            <td>{{ $equipments->equipment_discount}}</td>
                            <td>{{$equipments->description}}</td>
                            <td><img src="{{ asset('storage/shop_items_photos/'.$equipments->photo)}}" style="width:40px;height:40px;"></td>
                            <td>{{$equipments->status}}</td>
                            <td>
                                <a href="/admin/edit/{{$equipments->id}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                               
                                <a href="/admin/delete-accomodation/{{$equipments->id}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt-2">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      Showing {{$get_all_equipments->firstItem()}} to {{$get_all_equipments->lastItem()}} out of {{$get_all_equipments->total()}} Items
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 ml-0">
                      {{$get_all_equipments->links()}}
                    </div>
            </div>
        </div>
    </div>
</div>
