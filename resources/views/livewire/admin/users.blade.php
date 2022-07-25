<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                <button onclick="Livewire.emit('openModal', 'admin.add-users')" class="btn btn-info  m-l-15 text-white mb-3"><i class="fa fa-plus-circle"></i> Add users Image</button>
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
                        <th scope="col" wire:click="sortBy('users.id')" style="cursor: pointer;">No
                            @include('partials._sort-icon',['field'=>'users.id'])
                        </th>
                        <th scope="col" wire:click="sortBy('name')" style="cursor: pointer;">Name
                            @include('partials._sort-icon',['field'=>'name'])
                        </th>
                        <th scope="col" wire:click="sortBy('type')" style="cursor: pointer;">Type
                            @include('partials._sort-icon',['field'=>'type'])
                        </th>
                        <th scope="col" wire:click="sortBy('email')" style="cursor: pointer;">Email
                            @include('partials._sort-icon',['field'=>'email'])
                        </th>
                        <th scope="col" wire:click="sortBy('telephone')" style="cursor: pointer;">Contact
                            @include('partials._sort-icon',['field'=>'telephone'])
                        </th>
                        <th scope="col" wire:click="sortBy('amount')" style="cursor: pointer;">Amount
                            @include('partials._sort-icon',['field'=>'amount'])
                        </th>
                        <th scope="col" wire:click="sortBy('payment_date')" style="cursor: pointer;">Payment Date
                            @include('partials._sort-icon',['field'=>'payment_date'])
                        </th>
                        <th scope="col" wire:click="sortBy('payment_status')" style="cursor: pointer;">Payment Status
                            @include('partials._sort-icon',['field'=>'payment_status'])
                        </th>
                        <th scope="col" wire:click="sortBy('address')" style="cursor: pointer;">Address
                            @include('partials._sort-icon',['field'=>'address'])
                        </th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($get_all_users as $i=>$users)
                        <tr>
                            <td> {{$get_all_users->firstItem() + $i}}</td>
                            <td hidden>{{$users->id}}</td>
                            <td>{{$users->name}}</td>
                            <td>{{$users->type}}</td>
                            <td>{{$users->email}}</td>
                            <td>{{$users->telephone}}</td>
                            <td>{{$users->amount}}</td>
                            <td>{{$users->payment_date}}</td>
                            <td>{{$users->payment_status}}</td>
                            <td>{{$users->address}}</td>
                            <td>
                                <a href="/users/delete-users/{{$users->id}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt-2">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      Showing {{$get_all_users->firstItem()}} to {{$get_all_users->lastItem()}} out of {{$get_all_users->total()}} items
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 ml-0">
                      {{$get_all_users->links()}}
                    </div>
            </div>
        </div>
    </div>
</div>
