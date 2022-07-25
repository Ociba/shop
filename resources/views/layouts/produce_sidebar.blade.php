<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark logo-dark">
    <!-- Brand demo (see assets/css/demo/demo.css) -->
    <div class="app-brand demo bg-primary">
        <span class="app-brand-logo demo">
            {{--<img src="assets/img/logo.png" alt="Brand Logo" class="img-fluid">--}}
        </span>
        <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Joome<span style="color:black;">Shopping</span> Center</a>
        <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
        </a>
    </div>
    <div class="sidenav-divider mt-0"></div>

    <!-- Links -->
    <ul class="sidenav-inner py-1">
         @if(auth()->user()->user_type == '4' && (auth()->user()->payment_status =='successful'))
        <!-- Dashboards -->
        <li  @if(\Request::route()->getName() == "My Produce Dashboard") class="sidenav-item active" @else class="sidenav-item" @endif>
            <a href="/produce-dashboard" class="sidenav-link">
                <i class="sidenav-icon feather icon-home"></i>
                <div>Dashboards</div>
            </a>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li  @if(\Request::route()->getName() == "My Produce") class="sidenav-item active" @else class="sidenav-item" @endif>
            <a href="agricultureproduce/my-produce" class="sidenav-link">
                <i class="sidenav-icon feather icon-users"></i>
                <div>My Produce</div>
            </a>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li  @if(\Request::route()->getName() == "My Payments") class="sidenav-item active" @else class="sidenav-item" @endif>
            <a href="/my_payments" class="sidenav-link">
                <i class="sidenav-icon ion ion-md-wallet"></i>
                <div>My Payments Data</div>
            </a>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-settings"></i>
                <div>Account Settings</div>
            </a>
            <ul class="sidenav-menu">
                <li @if(\Request::route()->getName() == "Change Password") class="sidenav-item active" @else class="sidenav-item" @endif>
                    <a href="/change-password" class="sidenav-link">
                        <div>Change Password</div>
                    </a>
                </li>
            </ul>
        </li>
        @else
        <li class="sidenav-divider mb-1"></li>
        <li  @if(\Request::route()->getName() == "Payments Form") class="sidenav-item active" @else class="sidenav-item" @endif>
            <a href="/pay-your-subscription" class="sidenav-link">
                <i class="sidenav-icon ion ion-md-wallet"></i>
                <div>Make Payments</div>
            </a>
        </li>
        @endif
        <!-- Layouts -->
        <li class="sidenav-divider mb-1"></li>
    </ul>
</div>