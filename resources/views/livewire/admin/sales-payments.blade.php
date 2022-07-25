<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                    {{--<button onclick="Livewire.emit('openModal', 'clients.make-accomodation-payments')" class="btn btn-info  m-l-15 text-white mb-3"><i class="fa fa-plus-circle"></i> Make Payments</button>--}}
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
                        <th scope="col" wire:click="sortBy('customer_payments.id')" style="cursor: pointer;">No
                            @include('partials._sort-icon',['field'=>'customer_payments.id'])
                        </th>
                        <th scope="col" wire:click="sortBy('name')" style="cursor: pointer;">Name
                            @include('partials._sort-icon',['field'=>'name'])
                        </th>
                        <th scope="col" wire:click="sortBy('item_name')" style="cursor: pointer;">Item
                            @include('partials._sort-icon',['field'=>'item_name'])
                        </th>
                        <th scope="col" wire:click="sortBy('quantity')" style="cursor: pointer;">Quantity
                            @include('partials._sort-icon',['field'=>'quantity'])
                        </th>
                        <th scope="col" wire:click="sortBy('price')" style="cursor: pointer;">Price
                            @include('partials._sort-icon',['field'=>'price'])
                        </th>
                        <th scope="col" wire:click="sortBy('created_at')" style="cursor: pointer;">Date & Time
                            @include('partials._sort-icon',['field'=>'created_at'])
                        </th>
                        <th scope="col" wire:click="sortBy('status')" style="cursor: pointer;">Status
                            @include('partials._sort-icon',['field'=>'status'])
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($get_all_sales_payments as $i=>$payments)
                        <tr>
                            <td> {{$get_all_sales_payments->firstItem() + $i}}</td>
                            <td hidden>{{$payments->id}}</td>
                            <td>{{$payments->name}}</td>
                            <td>{{$payments->item_name}}</td>
                            <td>{{$payments->quantity}}</td>
                            <td>{{ number_format($payments->price)}}</td>
                            <td>{{$payments->created_at}}</td>
                            @if($payments->status == 'delivered')
                            <td><span class="badge badge-pill badge-success">{{$payments->status}}</span></td>
                            @else
                            <td><span class="badge badge-pill badge-danger">{{$payments->status}}</span></td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt-2">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      Showing {{$get_all_sales_payments->firstItem()}} to {{$get_all_sales_payments->lastItem()}} out of {{$get_all_sales_payments->total()}} items
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 ml-0">
                      {{$get_all_sales_payments->links()}}
                    </div>
            </div>
        </div>
    </div>
</div>
