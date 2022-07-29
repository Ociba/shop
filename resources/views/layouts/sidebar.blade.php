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

        <!-- Dashboards -->
        <li  @if(\Request::route()->getName() == "Dashboard") class="sidenav-item active" @else class="sidenav-item" @endif>
            <a href="/dashboard" class="sidenav-link">
                <i class="sidenav-icon feather icon-home"></i>
                <div>Admin Dashboards</div>
            </a>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li  @if(\Request::route()->getName() == "Customer Orders") class="sidenav-item active" @else class="sidenav-item" @endif>
            <a href="/customershoppingorders/received-orders" class="sidenav-link">
                <i class="sidenav-icon feather icon-folder"></i>
                <div>Customer Orders</div>
                <div class="pl-1 ml-auto">
                    <div class="badge badge-danger">0+</div>
                </div>
            </a>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon fas fa-coins"></i>
                <div>Payments</div>
            </a>
            <ul class="sidenav-menu">
                <li @if(\Request::route()->getName() == "Registration") class="sidenav-item active" @else class="sidenav-item" @endif>
                    <a href="/payments/registration-payments" class="sidenav-link">
                        <div>Registration Fee</div>
                    </a>
                </li>
                <li @if(\Request::route()->getName() == "Sales") class="sidenav-item active" @else class="sidenav-item" @endif>
                    <a href="/payments/sales-payments" class="sidenav-link">
                        <div>Sales</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-users"></i>
                <div>Accomodation</div>
                <div class="pl-1 ml-auto">
                    <div class="badge badge-primary">0+</div>
                </div>
            </a>
            <ul class="sidenav-menu">
                <li @if(\Request::route()->getName() == "Accomodation Categories") class="sidenav-item active" @else class="sidenav-item" @endif>
                    <a href="/accomodation/adnin-accomodation-categories" class="sidenav-link">
                        <div>Accomodation Categories</div>
                    </a>
                </li>
                <li @if(\Request::route()->getName() == "Available Accomodations") class="sidenav-item active" @else class="sidenav-item" @endif>
                    <a href="/accomodation/adnin-available-accomodation" class="sidenav-link">
                        <div>Accomodation Available</div>
                    </a>
                </li>
                <li @if(\Request::route()->getName() == "Suspended Investors") class="sidenav-item active" @else class="sidenav-item" @endif>
                    <a href="/admin/suspended-investors" class="sidenav-link">
                        <div>Accomodation Taken</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-shopping-cart"></i>
                <div>Shop</div>
                <div class="pl-1 ml-auto">
                    <div class="badge badge-primary">0+</div>
                </div>
            </a>
            <ul class="sidenav-menu">
                <li @if(\Request::route()->getName() == "Shop Item Categories") class="sidenav-item active" @else class="sidenav-item" @endif>
                    <a href="/shop/shop-items-categories" class="sidenav-link">
                        <div>Shop Item Categories</div>
                    </a>
                </li>
                <li @if(\Request::route()->getName() == "Available Items") class="sidenav-item active" @else class="sidenav-item" @endif>
                    <a href="/shop/shop-items" class="sidenav-link">
                        <div>Shop Items Available</div>
                    </a>
                </li>
                {{--<li @if(\Request::route()->getName() == "Classfied") class="sidenav-item active" @else class="sidenav-item" @endif>
                    <a href="/shop/add-classfied-items" class="sidenav-link">
                        <div>Add Classfied & Promotion</div>
                    </a>
                </li>--}}
                <li @if(\Request::route()->getName() == "Out of Stock") class="sidenav-item active" @else class="sidenav-item" @endif>
                    <a href="/shop/out-of-stock-shop-items" class="sidenav-link">
                        <div>Out of Stock Items</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon fas fa-lemon"></i>
                <div>Produce</div>
                <div class="pl-1 ml-auto">
                    <div class="badge badge-primary">0+</div>
                </div>
            </a>
            <ul class="sidenav-menu">
                <li @if(\Request::route()->getName() == "Produce Categories") class="sidenav-item active" @else class="sidenav-item" @endif>
                    <a href="/agricultureproduce/produce-category" class="sidenav-link">
                        <div>Produce Category</div>
                    </a>
                </li>
                <li @if(\Request::route()->getName() == "Produce") class="sidenav-item active" @else class="sidenav-item" @endif>
                    <a href="/agricultureproduce/produce" class="sidenav-link">
                        <div>Produce</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li  @if(\Request::route()->getName() == "Equipments") class="sidenav-item active" @else class="sidenav-item" @endif>
            <a href="/agricultureequipments/equipment" class="sidenav-link">
                <i class="sidenav-icon fas fa-gavel"></i>
                <div>Equipments</div>
                <div class="pl-1 ml-auto">
                    <div class="badge badge-danger">0+</div>
                </div>
            </a>
        </li> 
        <li class="sidenav-divider mb-1"></li>
        <li  @if(\Request::route()->getName() == "Food") class="sidenav-item active" @else class="sidenav-item" @endif>
            <a href="/food/food" class="sidenav-link">
                <i class="sidenav-icon feather icon-grid"></i>
                <div>Food</div>
                <div class="pl-1 ml-auto">
                    <div class="badge badge-danger">0+</div>
                </div>
            </a>
        </li>
       
        <li class="sidenav-divider mb-1"></li>

        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-check-square"></i>
                <div>About Joome</div>
            </a>
            <ul class="sidenav-menu">
                <li @if(\Request::route()->getName() == "Admin Blog") class="sidenav-item active" @else class="sidenav-item" @endif>
                    <a href="/blog/blog" class="sidenav-link">
                        <div>Blog</div>
                    </a>
                </li>
                <li @if(\Request::route()->getName() == "News") class="sidenav-item active" @else class="sidenav-item" @endif>
                    <a href="/news/get-news" class="sidenav-link">
                        <div>News</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-menu"></i>
                <div>Requests</div>
            </a>
            <ul class="sidenav-menu">
                <li @if(\Request::route()->getName() == "Riders Request") class="sidenav-item active" @else class="sidenav-item" @endif>
                    <a href="/requests/get-riders-request" class="sidenav-link">
                        <div>Rider</div>
                    </a>
                </li>
                <li @if(\Request::route()->getName() == "Partners Request") class="sidenav-item active" @else class="sidenav-item" @endif>
                    <a href="/requests/get-patners-request" class="sidenav-link">
                        <div>Partner</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-package"></i>
                <div>Front Page</div>
            </a>
            <ul class="sidenav-menu">
                <li @if(\Request::route()->getName() == "Slider") class="sidenav-item active" @else class="sidenav-item" @endif>
                    <a href="/slider/get-slider" class="sidenav-link">
                        <div>Slider</div>
                    </a>
                </li>
                <li @if(\Request::route()->getName() == "Promotions") class="sidenav-item active" @else class="sidenav-item" @endif>
                    <a href="/promotions/get-promotion-items" class="sidenav-link">
                        <div>Promotions</div>
                    </a>
                </li>
                <li @if(\Request::route()->getName() == "Messages") class="sidenav-item active" @else class="sidenav-item" @endif>
                    <a href="/messages/get-messages" class="sidenav-link">
                        <div>Messages</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-settings"></i>
                <div>Account Settings</div>
            </a>
            <ul class="sidenav-menu">
                <li @if(\Request::route()->getName() == "Users") class="sidenav-item active" @else class="sidenav-item" @endif>
                    <a href="/users/get-all-users" class="sidenav-link">
                        <div>Users</div>
                    </a>
                </li>
                <li @if(\Request::route()->getName() == "Change Password") class="sidenav-item active" @else class="sidenav-item" @endif>
                    <a href="/change-password" class="sidenav-link">
                        <div>Change Password</div>
                    </a>
                </li>
                <li @if(\Request::route()->getName() == "Roles For Permissions") class="sidenav-item active" @else class="sidenav-item" @endif>
                    <a href="/accountsettings/get-roles-for-permissions" class="sidenav-link">
                        <div>Permissions</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Layouts -->
        <li class="sidenav-divider mb-1"></li>
    </ul>
</div>