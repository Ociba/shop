<div>
    {{-- Stop trying to control. --}}
    <div class="col-sm-9" id="content">
            <h1>Register Account</h1>
            <p>If you already have an account with us, please login at the <a href="{{route('login')}}"><span class="text-success">login page</a></a>.</p>
              <x-jet-validation-errors class="mb-4" />
            <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('register') }}">
                @csrf
                <fieldset id="account">
                    <legend>Your Personal Details</legend>
                    <div class="form-group required">
                        <label for="input-firstname" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Names"  name="name" :value="old('name')" required autofocus autocomplete="name">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-2 control-label">E-Mail</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="E-Mail" value="" name="email" :value="old('email')" required>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-telephone" class="col-sm-2 control-label">Telephone</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="telephone" placeholder="Telephone" maxLength="13" name="telephone" required>
                        </div>
                    </div>
                </fieldset>
                <fieldset id="address">
                    <legend>Your Address</legend>
                    <div class="form-group required">
                        <label for="input-address-1" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" placeholder="Delivery Address"  name="address" :value="old('address')" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-address-2" class="col-sm-2 control-label">Division</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="division" placeholder="Your Division"  name="division" :value="old('division')" required>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-city" class="col-sm-2 control-label">Street</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="street" placeholder="Delivery Street"  name="street" :value="old('street')" required>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-postcode" class="col-sm-2 control-label">Plot Number (Optional)</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="plot_number" placeholder="Delivery Plot Number"  name="plot_number" :value="old('plot_number')">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-postcode" class="col-sm-2 control-label">Town</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="town" placeholder="Delivery Town"  name="town" :value="old('town')">
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Your Password</legend>
                    <div class="form-group required">
                        <label for="input-password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required autocomplete="new-password" >
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-confirm" class="col-sm-2 control-label">Password Confirm</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password_confirmation" placeholder="Password Confirm" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Newsletter</legend>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Subscribe</label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" value="1" name="newsletter">
                                Yes</label>
                            <label class="radio-inline">
                                <input type="radio" checked="checked" value="0" name="newsletter">
                                No</label>
                        </div>
                    </div>
                </fieldset>
                <input type="hidden" value="3" name="user_type">
                <div class="buttons">
                    <div class="pull-right">I have read and agree to the <a class="agree" href="#"><b>Privacy Policy</b></a>
                        <input type="checkbox" value="1" name="agree">
                        &nbsp;
                        <input type="submit" class="btn btn-primary" value="Continue">
                    </div>
                </div>
            </form>
        </div>
</div>
