<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
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
                        <input type="text" class="form-control" wire:model="search">
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="report-table" class="table table-bordered table-striped mb-0">
                    <thead>
                        <tr class="text-center">
                        <th scope="col" wire:click="sortBy('customer_orders.id')" style="cursor: pointer;">No
                            @include('partials._sort-icon',['field'=>'customer_orders.id'])
                        </th>
                        <th scope="col" wire:click="sortBy('name')" style="cursor: pointer;">Name
                            @include('partials._sort-icon',['field'=>'name'])
                        </th>
                        <th scope="col" wire:click="sortBy('created_at')" style="cursor: pointer;">Date & Time
                            @include('partials._sort-icon',['field'=>'created_at'])
                        </th>
                        <th>Time Elapsed</th>
                        <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($get_customer_orders as $i=>$orders)
                        <tr>
                            <td> {{$get_customer_orders->firstItem() + $i}}</td>
                            <td hidden>{{$orders->id}}</td>
                            <td>{{$orders->name}}</td>
                            <td>{{$orders->created_at}}</td>
                            <td>{{Carbon\Carbon::parse($orders->created_at)->diffForHumans()}}</td>
                            <td>
                                <a href="/customershoppingorders/view-order-details/{{$orders->user_id}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;View Order </a>
                                <a href="/customershoppingorders/mark-order-as-delivered/{{$orders->user_id}}" class="btn btn-success btn-sm"><i class="feather icon-check-square"></i>&nbsp; Mark As Delivered </a>
                                <a href="/customershoppingorders/print-order/{{$orders->user_id}}" class="btn btn-danger btn-sm"><i class="feather icon-printer"></i>&nbsp;Print </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt-2">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      Showing {{$get_customer_orders->firstItem()}} to {{$get_customer_orders->lastItem()}} out of {{$get_customer_orders->total()}} items
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 ml-0">
                      {{$get_customer_orders->links()}}
                    </div>
            </div>
        </div>
    </div>
</div>
