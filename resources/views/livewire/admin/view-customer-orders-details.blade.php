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
                        <th scope="col" wire:click="sortBy('item_name')" style="cursor: pointer;">Item Name
                            @include('partials._sort-icon',['field'=>'item_name'])
                        </th>
                        <th scope="col" wire:click="sortBy('quantity')" style="cursor: pointer;">Quantity
                            @include('partials._sort-icon',['field'=>'quantity'])
                        </th>
                        <th scope="col" wire:click="sortBy('price')" style="cursor: pointer;">Price
                            @include('partials._sort-icon',['field'=>'price'])
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($get_customer_order as $i=>$orders)
                        <tr>
                            <td> {{$get_customer_order->firstItem() + $i}}</td>
                            <td hidden>{{$orders->id}}</td>
                            <td>{{$orders->item_name}}</td>
                            <td>{{$orders->quantity}}</td>
                            <td>{{ number_format($orders->price)}}</td>
                        </tr>
                        @endforeach
                        <tr style="font-weight:bold;">
                            @php
                            $sum =\DB::table('customer_orders')->where('customer_orders.status','active')
                            ->whereDate('customer_orders.created_at' , '=',\Carbon\Carbon::yesterday())
                            ->whereTime('customer_orders.created_at' , '>',\Carbon\Carbon::now()->subHours(5))
                            ->where('customer_orders.user_id',$this->user_id)->sum('price');
                            @endphp
                          <td colspan="3">Total</td>
                          <td> Ugx: {{ number_format($sum)}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row mt-2">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      Showing {{$get_customer_order->firstItem()}} to {{$get_customer_order->lastItem()}} out of {{$get_customer_order->total()}} items
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 ml-0">
                      {{$get_customer_order->links()}}
                    </div>
            </div>
        </div>
    </div>
</div>
