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
                        <th scope="col" wire:click="sortBy('messages.id')" style="cursor: pointer;">No
                            @include('partials._sort-icon',['field'=>'messages.id'])
                        </th>
                        <th scope="col" wire:click="sortBy('senders_name')" style="cursor: pointer;">Senders Name
                            @include('partials._sort-icon',['field'=>'senders_name'])
                        </th>
                        <th scope="col" wire:click="sortBy('contact')" style="cursor: pointer;">Contact
                            @include('partials._sort-icon',['field'=>'contact'])
                        </th>
                        <th scope="col" wire:click="sortBy('enquiry')" style="cursor: pointer;">Enquiry
                            @include('partials._sort-icon',['field'=>'enquiry'])
                        </th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($get_messages as $i=>$message)
                        <tr>
                            <td> {{$get_messages->firstItem() + $i}}</td>
                            <td hidden>{{$message->id}}</td>
                            <td>{{$message->senders_name}}</td>
                            <td>{{$message->contact}}</td>
                            <td>{{$message->enquiry}}</td>
                            <td>
                                <a href="/message/delete-message/{{$message->id}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt-2">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      Showing {{$get_messages->firstItem()}} to {{$get_messages->lastItem()}} out of {{$get_messages->total()}} items
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 ml-0">
                      {{$get_messages->links()}}
                    </div>
            </div>
        </div>
    </div>
</div>
