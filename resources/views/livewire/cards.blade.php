<div>
    {{-- Do your work, then step back. --}}
    <div class="row">
        <!-- Staustic card 2 Start -->
        <div class="col-sm-6 col-xl-3">
        <div class="card mb-4 bg-primary text-white">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="ion ion-ios-wallet display-4"></div>
                    <div class="ml-4">
                        <div class="text-white small">Todays' Sales</div>
                        <div class="text-large">Ugx : {{$todays_sales}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card mb-4 bg-success text-white">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="ion ion-ios-card display-4"></div>
                    <div class="ml-4">
                        <div class="text-white small">This Months Sales</div>
                        <div class="text-large">ugx: {{$this_months_sales}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card mb-4 bg-danger text-white">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="ion ion-md-cart display-4"></div>
                    <div class="ml-4">
                        <div class="text-white small">Total Sales</div>
                        <div class="text-large">Ugx :{{number_format($all_sales)}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card mb-4 bg-warning text-white">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="ion ion-md-pulse display-4"></div>
                    <div class="ml-4">
                        <div class="text-white small">subscribed Today</div>
                        <div class="text-large">Ugx :{{ number_format($todays_subscription_amount)}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Staustic card 2 end -->
    <!-- Staustic card 1 Start -->
    <div class="col-sm-6 col-xl-3">
        <div class="card mb-4">
            <div class="d-flex align-items-center">
                <div class="card-body bg-warning text-center">
                    <div class="ion ion-ios-wallet display-4 text-white"></div>
                </div>
                <div class="card-body py-0">
                    <small class="font-weight-bold mb-1">Subscription Amount</small>
                    <h3 class="mb-0">Ugx : {{ number_format($subscription_amount)}}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card mb-4">
            <div class="d-flex align-items-center">
                <div class="card-body bg-danger text-center">
                    <div class="ion ion-ios-card display-4 text-white"></div>
                </div>
                <div class="card-body py-0">
                    <small class="font-weight-bold mb-1">No. Of Subscribers</small>
                    <h3 class="mb-0"> {{$total_number_of_subscribers}}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card mb-4">
            <div class="d-flex align-items-center">
                <div class="card-body bg-primary text-center">
                    <div class="ion ion-md-cart display-4 text-white"></div>
                </div>
                <div class="card-body py-0">
                    <small class="font-weight-bold mb-1">No of Online-Shopping</small>
                    <h3 class="mb-0">{{$total_number_of_online_shopping_account}}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card mb-4">
            <div class="d-flex align-items-center">
                <div class="card-body bg-success text-center">
                    <div class="ion ion-md-pulse display-4 text-white"></div>
                </div>
                <div class="card-body py-0">
                    <small class="font-weight-bold mb-1">No. of Partners</small>
                    <h3 class="mb-0"> {{$total_number_of_partners}}</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Staustic card 1 end -->
    </div>
</div>
