<div>
    {{-- Stop trying to control. --}}
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
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
                        <th scope="col" wire:click="sortBy('riders.id')" style="cursor: pointer;">No
                            @include('partials._sort-icon',['field'=>'riders.id'])
                        </th>
                        <th scope="col" wire:click="sortBy('name')" style="cursor: pointer;">Name
                            @include('partials._sort-icon',['field'=>'name'])
                        </th>
                        <th scope="col" wire:click="sortBy('nin')" style="cursor: pointer;">NIN
                            @include('partials._sort-icon',['field'=>'nin'])
                        </th>
                        <th scope="col" wire:click="sortBy('phone_number')" style="cursor: pointer;">Phone Number
                            @include('partials._sort-icon',['field'=>'phone_number'])
                        </th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($get_all_riders_requests as $i=>$rider)
                        <tr>
                            <td> {{$get_all_riders_requests->firstItem() + $i}}</td>
                            <td hidden>{{$rider->id}}</td>
                            <td>{{$rider->name}}</td>
                            <td>{{$rider->nin}}</td>
                            <td>{{$rider->phone_number}}</td>
                            <td>
                                <a href="/rider/delete-rider/{{$rider->id}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt-2">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      Showing {{$get_all_riders_requests->firstItem()}} to {{$get_all_riders_requests->lastItem()}} out of {{$get_all_riders_requests->total()}} items
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 ml-0">
                      {{$get_all_riders_requests->links()}}
                    </div>
            </div>
        </div>
    </div>
</div>
