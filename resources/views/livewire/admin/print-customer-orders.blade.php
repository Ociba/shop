<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="container-fluid flex-grow-1 container-p-y">
        
    @foreach($print_customer_order as $order)
        <div class="card">
            <div class="card-body p-5">
                <div class="row">
                    <div class="col-sm-6 pb-4">
                        <div class="media align-items-center mb-4">
                            <a href="index.html" class="navbar-brand app-brand demo py-0 mr-4">
                                <span class="app-brand-logo demo">
                                <img style="height:50px;" src="{{asset('front/image/logo1.jpg')}}" alt="Brand Logo" class="img-fluid">
                                </span>
                                <span class="app-brand-text demo font-weight-bold text-dark ml-2"></span>
                            </a>
                        </div>
                        <div class="mb-1">Joome Shopping Center, <br>Along Moroto Road, <br>Opposite Soroti University</div>
                    </div>
                    <div class="col-sm-6 text-right pb-4">
                        <h6 class="text-big text-large font-weight-bold mb-3 text-danger">INVOICE #{{date('Y')}}0{{$order->user_id}}</h6>
                        <div class="mb-1">Email:
                            <strong class="font-weight-semibold">joomeproperty2022@gmail.com</strong>
                        </div>
                        <div class="mb-1">Tel:
                            <strong class="font-weight-semibold">0775401793 | 0753926367</strong>
                        </div>
                        <div>Date:
                            <strong class="font-weight-semibold">{{ date('F d, Y', strtotime($order->created_at))}}</strong>
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <div class="row">
                    <div class="col-sm-6 mb-4">
                        <div class="font-weight-bold mb-2">Invoice To:</div>
                        <div>{{$order->name}}</div>
                        <div>Address :{{$order->address}}</div>
                        <div>Email: {{$order->email}}</div>
                        <div>Division: {{$order->division}}</div>
                        <div>Plot Number: {{$order->plot_number}}</div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="font-weight-bold mb-2">Payment Details:</div>
                        <table>
                            <tbody>
                                @php
                                $sum =\DB::table('customer_orders')->where('customer_orders.status','active')
                                ->whereDate('customer_orders.created_at' , '=',\Carbon\Carbon::today())
                                ->whereTime('customer_orders.created_at' , '>',\Carbon\Carbon::now()->subHours(1))
                                ->where('customer_orders.user_id',$this->user_id)->sum('price');
                                @endphp
                                <tr>
                                    <td class="pr-3">Total Due:</td>
                                    <td>
                                        <strong>Ugx :{{ number_format($sum)}}</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pr-3">Town:</td>
                                    <td>{{$order->town}}</td>
                                </tr>
                                <tr>
                                    <td class="pr-3">Phone Number:</td>
                                    <td>{{$order->telephone}}</td>
                                </tr>
                                <tr>
                                    <td class="pr-3">Street:</td>
                                    <td>{{$order->street}}</td>
                                </tr>
                                <tr>
                                    <td class="pr-3">Order Time:</td>
                                    <td>{{$order->created_at}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="table-responsive mb-4">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th class="py-3">
                                    No
                                </th>
                                <th class="py-3">
                                    Item
                                </th>
                                <th class="py-3">
                                    Quantity
                                </th>
                                <th class="py-3">
                                    Amount
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                            @php
                            $get_order_info =\DB::table('customer_orders')->join('users','users.id','customer_orders.user_id')
                            ->join('shops','shops.id','customer_orders.item_id')
                            ->where('customer_orders.status','active')
                            ->whereDate('customer_orders.created_at' , '=',\Carbon\Carbon::today())
                            ->whereTime('customer_orders.created_at' , '>',\Carbon\Carbon::now()->subHours(1))
                            ->where('customer_orders.user_id',$order->user_id)
                            ->get(['customer_orders.*','shops.item_name']);
                            @endphp
                            @foreach($get_order_info as $j=>$orders)
                                <td class="py-">
                                   {{$j+1}}
                                </td>
                                <td class="py-3">
                                    {{$orders->item_name}}
                                </td>
                                <td class="py-3">
                                    {{$orders->quantity}}
                                </td>
                                <td class="py-3">
                                    {{ number_format($orders->price)}}
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="3" class="py-3">
                                    <div class="font-weight-semibold">Total</div>
                                </td>
                                <td class="py-3">
                                    <strong>Ugx :{{ number_format($sum)}}</strong>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-right py-3">
                                    Subtotal:
                                    <br> Transport:
                                    <br>
                                    <span class="d-block text-big mt-2">Total:</span>
                                </td>
                                <td class="py-3">
                                    <strong>Ugx :{{ number_format($sum)}}</strong>
                                    <br>
                                    <strong>Ugx: 4,000</strong>
                                    <br>
                                    <strong class="d-block text-big mt-2">Ugx :{{ number_format($sum + 4000)}}</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-muted">
                    <strong>Note:</strong> Joome is glad to deliver this product (s) to You Please Check the product well and sign delivery form  when receiving to confirm that the order was delivered successfully before our delivering team leave your place.
                    
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6 pb-4">
                      Name:............................
                    </div>
                    <div class="col-sm-6 pb-4">
                        Date & Sign: ....................
                    </div>
                      <p style="text-align:center"><em>For more information contact us using our address or contact numbers 0775401793, 0753926367, joomeproperty2022@gmail.com</em></p>
                </div>
            </div>
            <div class="card-footer text-right">
                <a href="/customershoppingorders/print-order-now/{{$order->user_id}}" target="_blank" class="btn btn-default"><i class="ion ion-md-print"></i>&nbsp; Print</a>
                
            </div>
        </div>
        @endforeach
    </div>
</div>
