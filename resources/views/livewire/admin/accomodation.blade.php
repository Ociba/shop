<div>
    {{-- The best athlete wants his opponent at his best. --}}
    @livewireStyles
    <div class="card">
        <div class="card-body">
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
                        @foreach($available_accomodation as $i=>$available_accomodation)
                        <tr>
                            <td> {{$available_accomodation->firstItem() + $i}}</td>
                            <td hidden>{{$available_accomodation->id}}</td>
                            <td>{{$available_accomodation->name}}</td>
                            <td>{{$available_accomodation->category}}</td>
                            <td>{{$available_accomodation->property_size}}</td>
                            <td>{{$available_accomodation->bedroom}}</td>
                            <td>{{$available_accomodation->bathroom}}</td>
                            <td>{{$available_accomodation->location}}</td>
                            <td>{{$available_accomodation->price}}</td>
                            <td>{{$available_accomodation->discount}}</td>
                            <td>{{$available_accomodation->discount_price}}</td>
                            <td>{{$available_accomodation->photo}}</td>
                            <td>{{ $available_accomodation->property_status}}</td>
                            <td>
                                <a href="/admin/edit/{{$available_accomodation->id}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                               
                                <a href="/admin/delete-accomodation$available_accomodation/{{$available_accomodation->id}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row mt-2">
                {{$available_accomodation->links()}}
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</div>
