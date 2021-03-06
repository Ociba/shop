<div>
    {{-- The whole world belongs to you. --}}
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
                        <th scope="col" wire:click="sortBy('payments.id')" style="cursor: pointer;">No
                            @include('partials._sort-icon',['field'=>'payments.id'])
                        </th>
                        <th scope="col" wire:click="sortBy('name')" style="cursor: pointer;">Name
                            @include('partials._sort-icon',['field'=>'name'])
                        </th>
                        <th scope="col" wire:click="sortBy('amount')" style="cursor: pointer;">Amount Paid
                            @include('partials._sort-icon',['field'=>'amount'])
                        </th>
                        <th scope="col" wire:click="sortBy('created_at')" style="cursor: pointer;">Paid On
                            @include('partials._sort-icon',['field'=>'created_at'])
                         </th>
                         <th scope="col" wire:click="sortBy('payment_status')" style="cursor: pointer;">Payment Status
                            @include('partials._sort-icon',['field'=>'payment_status'])
                         </th>
                         <th>Remaining Time</th>
                    </thead>
                    <tbody>
                        @foreach($all_registration_payments as $i=>$payments)
                        <tr>
                            <td> {{$all_registration_payments->firstItem() + $i}}</td>
                            <td hidden>{{$payments->id}}</td>
                            <td>{{$payments->name}}</td>
                            <td>{{ number_format($payments->amount)}}</td>
                            <td>{{$payments->created_at}}</td>
                            <td>{{$payments->payment_status}}</td>
                            @php
                              $end_date_date =Carbon\Carbon::parse(strtotime($payments->created_at))->addDays(180);
                              $count_remaining_days =$end_date_date->diffForHumans()
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
                      Showing {{$all_registration_payments->firstItem()}} to {{$all_registration_payments->lastItem()}} out of {{$all_registration_payments->total()}} items
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 ml-0">
                      {{$all_registration_payments->links()}}
                    </div>
            </div>
        </div>
    </div>
</div>
