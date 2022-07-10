<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="card">
        <div class="card-body">
        @if(session()->has('success'))
        <div class="card-header bg-success">
            <h4 class="mb-0 text-white">{{session('success')}}</h4>
        </div>
        @endif
            <div class="row align-produces-center m-l-0">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                    <button onclick="Livewire.emit('openModal', 'admin.add-produce')" class="btn btn-info  m-l-15 text-white mb-3"><i class="fa fa-plus-circle"></i> Add Produces</button>
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
                    <div class="form-group col-sm-6 align-produces-right">
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
                        <th scope="col" wire:click="sortBy('produces.id')" style="cursor: pointer;">No
                            @include('partials._sort-icon',['field'=>'produces.id'])
                        </th>
                        <th scope="col" wire:click="sortBy('name')" style="cursor: pointer;">Owner
                            @include('partials._sort-icon',['field'=>'name'])
                        </th>
                        <th scope="col" wire:click="sortBy('produce_category')" style="cursor: pointer;">Category
                            @include('partials._sort-icon',['field'=>'produce_category'])
                        </th>
                        <th scope="col" wire:click="sortBy('produce_name')" style="cursor: pointer;">Produce Name
                            @include('partials._sort-icon',['field'=>'produce_name'])
                        </th>
                        <th scope="col" wire:click="sortBy('quantity')" style="cursor: pointer;">Quantity
                            @include('partials._sort-icon',['field'=>'quantity'])
                        </th>
                        <th scope="col" wire:click="sortBy('price')" style="cursor: pointer;">Price
                            @include('partials._sort-icon',['field'=>'price'])
                        </th>
                        <th scope="col" wire:click="sortBy('phone_number')" style="cursor: pointer;">Contact
                            @include('partials._sort-icon',['field'=>'phone_number'])
                        </th>
                        <th scope="col" wire:click="sortBy('percentage_discount')" style="cursor: pointer;">% Discount
                            @include('partials._sort-icon',['field'=>'percentage_discount'])
                        </th>
                        <th scope="col" wire:click="sortBy('new_amount')" style="cursor: pointer;">New Price
                            @include('partials._sort-icon',['field'=>'new_amount'])
                        </th>
                        <th scope="col" wire:click="sortBy('description')" style="cursor: pointer;">Description
                            @include('partials._sort-icon',['field'=>'description'])
                        </th>
                        <th scope="col" wire:click="sortBy('image')" style="cursor: pointer;">Photo
                            @include('partials._sort-icon',['field'=>'image'])
                        </th>
                        <th scope="col" wire:click="sortBy('status')" style="cursor: pointer;">Status
                            @include('partials._sort-icon',['field'=>'status'])
                        </th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($get_my_produce as $i=>$produces)
                        <tr>
                            <td> {{$get_my_produce->firstItem() + $i}}</td>
                            <td hidden>{{$produces->id}}</td>
                            <td>{{$produces->name}}</td>
                            <td>{{$produces->produce_category}}</td>
                            <td>{{$produces->produce_name}}</td>
                            <td>{{$produces->quantity}}</td>
                            <td>{{ number_format($produces->price)}}</td>
                            <td>{{$produces->phone_number}}</td>
                            <td>{{$produces->percentage_discount}}</td>
                            <td>{{ number_format($produces->new_amount)}}</td>
                            <td>{{$produces->description}}</td>
                            <td><img src="{{ asset('storage/produce_photos/'.$produces->image)}}" style="width:40px;height:40px;"></td>
                            <td>{{$produces->status}}</td>
                            <td>
                                <a href="/admin/edit/{{$produces->id}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                <a href="#" class="btn btn-info btn-sm"  onclick="Livewire.emit('openModal', 'clients.add-my-produce-discount',{{ json_encode(['produce_id' => $produces->id])}})"><i class="feather icon-plus"></i>&nbsp;Add Discount </a>
                                <a href="/admin/delete-accomodation/{{$produces->id}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt-2">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      Showing {{$get_my_produce->firstItem()}} to {{$get_my_produce->lastItem()}} out of {{$get_my_produce->total()}} Item
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 ml-0">
                      {{$get_my_produce->links()}}
                    </div>
            </div>
        </div>
    </div>
</div>
