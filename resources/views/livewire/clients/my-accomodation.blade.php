<div>
    {{-- Be like water. --}}
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                    <button onclick="Livewire.emit('openModal', 'admin.add-accomodation')" class="btn btn-info  m-l-15 text-white mb-3"><i class="fa fa-plus-circle"></i> Add Accomodation</button>
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
                        <input type="text" class="form-control" placeholder="Computer Number" wire:model="search">
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="report-table" class="table table-bordered table-striped mb-0">
                    <thead>
                        <tr class="text-center">
                        <th scope="col" wire:click="sortBy('acomodations.id')" style="cursor: pointer;">No
                            @include('partials._sort-icon',['field'=>'acomodations.id'])
                        </th>
                        <th scope="col" wire:click="sortBy('name')" style="cursor: pointer;">Name
                            @include('partials._sort-icon',['field'=>'name'])
                        </th>
                        <th scope="col" wire:click="sortBy('category')" style="cursor: pointer;">Category
                            @include('partials._sort-icon',['field'=>'category'])
                        </th>
                        <th scope="col" wire:click="sortBy('property_size')" style="cursor: pointer;">Size
                            @include('partials._sort-icon',['field'=>'property_size'])
                        </th>
                        <th scope="col" wire:click="sortBy('bedroom')" style="cursor: pointer;">BedRooms
                            @include('partials._sort-icon',['field'=>'bedroom'])
                        </th>
                        <th scope="col" wire:click="sortBy('bathroom')" style="cursor: pointer;">BatheRooms
                            @include('partials._sort-icon',['field'=>'bathroom'])
                        </th>
                        <th scope="col" wire:click="sortBy('location')" style="cursor: pointer;">Location
                            @include('partials._sort-icon',['field'=>'location'])
                        </th>
                        <th scope="col" wire:click="sortBy('price')" style="cursor: pointer;">Price
                            @include('partials._sort-icon',['field'=>'price'])
                        </th>
                        <th scope="col" wire:click="sortBy('discount')" style="cursor: pointer;">Discount
                            @include('partials._sort-icon',['field'=>'discount'])
                        </th>
                        <th scope="col" wire:click="sortBy('discount_price')" style="cursor: pointer;">Discount Price
                            @include('partials._sort-icon',['field'=>'discount_price'])
                        </th>
                        <th scope="col" wire:click="sortBy('photo')" style="cursor: pointer;">Photo
                            @include('partials._sort-icon',['field'=>'photo'])
                        </th>
                        <th scope="col" wire:click="sortBy('property_status')" style="cursor: pointer;">Property Status
                            @include('partials._sort-icon',['field'=>'property_status'])
                        </th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($get_my_accomodation as $i=>$accomodations)
                        <tr>
                            <td> {{$get_my_accomodation->firstItem() + $i}}</td>
                            <td hidden>{{$accomodations->id}}</td>
                            <td>{{$accomodations->name}}</td>
                            <td>{{$accomodations->category}}</td>
                            <td>{{$accomodations->property_size}}</td>
                            <td>{{$accomodations->bedroom}}</td>
                            <td>{{$accomodations->bathroom}}</td>
                            <td>{{$accomodations->location}}</td>
                            <td>{{ number_format($accomodations->price)}}</td>
                            <td>{{$accomodations->discount}}</td>
                            <td>{{$accomodations->discount_price}}</td>
                            <td><img src="{{ asset('storage/accomodation_photos/'.$accomodations->photo)}}" style="width:40px;height:40px;"></td>
                            <td>{{ $accomodations->property_status}}</td>
                            <td>
                                <a href="/admin/edit/{{$accomodations->id}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                <a href="#" class="btn btn-info btn-sm"  onclick="Livewire.emit('openModal', 'clients.add-my-accomodation-discount',{{ json_encode(['accomodation_id' => $accomodations->id])}})"><i class="feather icon-plus"></i>&nbsp;Add Discount </a>
                                <a href="/admin/delete-accomodation/{{$accomodations->id}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt-2">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      Showing {{$get_my_accomodation->firstItem()}} to {{$get_my_accomodation->lastItem()}} out of {{$get_my_accomodation->total()}} items
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 ml-0">
                      {{$get_my_accomodation->links()}}
                    </div>
            </div>
        </div>
    </div>
</div>
