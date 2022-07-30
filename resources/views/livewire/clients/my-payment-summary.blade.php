<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                    {{--<button onclick="Livewire.emit('openModal', 'clients.make-payments')" class="btn btn-info  m-l-15 text-white mb-3"><i class="fa fa-plus-circle"></i> Make Payments</button>--}}
                    <button class="btn btn-info btn-sm mb-3" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Make Payment</button>
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
                        <th scope="col" wire:click="sortBy('payments.id')" style="cursor: pointer;">No
                            @include('partials._sort-icon',['field'=>'payments.id'])
                        </th>
                        <th scope="col" wire:click="sortBy('amount')" style="cursor: pointer;">Amount Paid
                            @include('partials._sort-icon',['field'=>'amount'])
                        </th>
                        <th scope="col" wire:click="sortBy('created_at')" style="cursor: pointer;">Paid On
                            @include('partials._sort-icon',['field'=>'created_at'])
                         </th>
                         <th>Remaining Days</th>
                    </thead>
                    <tbody>
                        @foreach($get_my_payments_info as $i=>$payments)
                        <tr>
                            <td> {{$get_my_payments_info->firstItem() + $i}}</td>
                            <td hidden>{{$payments->id}}</td>
                            <td>{{$payments->amount}}</td>
                            <td>{{$payments->created_at}}</td>
                            @php
                              $count_remaining_days =Carbon\Carbon::parse($payments->created_at)->addDays(180)->diffForHumans()
                            @endphp
                            <td>{{$count_remaining_days}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt-2">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      Showing {{$get_my_payments_info->firstItem()}} to {{$get_my_payments_info->lastItem()}} out of {{$get_my_payments_info->total()}} items
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 ml-0">
                      {{$get_my_payments_info->links()}}
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Make Payments</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/make-payments" method="get">
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="hidden" value="{{auth()->user()->id}}">
                            <div class="form-group">
                                <label class="floating-label" for="Amount">Amount</label>
                                <input type="number" name="amount" class="form-control" id="Amount" placeholder="Enter Amount" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="Email">Mobile Money Phone Number</label>
                                <input type="number" name="phone_number" class="form-control" placeholder="e.g 2567********" required>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary">Pay Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
