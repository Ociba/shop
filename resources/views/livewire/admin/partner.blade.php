<div>
    {{-- Do your work, then step back. --}}
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
                        <th scope="col" wire:click="sortBy('partners.id')" style="cursor: pointer;">No
                            @include('partials._sort-icon',['field'=>'partners.id'])
                        </th>
                        <th scope="col" wire:click="sortBy('district')" style="cursor: pointer;">District
                            @include('partials._sort-icon',['field'=>'district'])
                        </th>
                        <th scope="col" wire:click="sortBy('nin')" style="cursor: pointer;">NIN
                            @include('partials._sort-icon',['field'=>'nin'])
                        </th>
                        <th scope="col" wire:click="sortBy('contact')" style="cursor: pointer;">Contact
                            @include('partials._sort-icon',['field'=>'contact'])
                        </th>
                        <th scope="col" wire:click="sortBy('business_type')" style="cursor: pointer;">Business Type
                            @include('partials._sort-icon',['field'=>'business_type'])
                        </th>
                        <th scope="col" wire:click="sortBy('type')" style="cursor: pointer;">Type
                            @include('partials._sort-icon',['field'=>'type'])
                        </th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($get_partners_information as $i=>$partner)
                        <tr>
                            <td> {{$get_partners_information->firstItem() + $i}}</td>
                            <td hidden>{{$partner->id}}</td>
                            <td>{{$partner->district}}</td>
                            <td>{{$partner->nin}}</td>
                            <td>{{$partner->contact}}</td>
                            <td>{{$partner->business_type}}</td>
                            <td>{{$partner->type}}</td>
                            <td>
                                <a href="/partner/delete-partner/{{$partner->id}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt-2">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      Showing {{$get_partners_information->firstItem()}} to {{$get_partners_information->lastItem()}} out of {{$get_partners_information->total()}} items
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 ml-0">
                      {{$get_partners_information->links()}}
                    </div>
            </div>
        </div>
    </div>
</div>
