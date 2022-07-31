<div>
    {{-- Stop trying to control. --}}
    <div class="col-sm-9" id="content">
            <h1>Register Account</h1>
            <p>If you already have an account with us, please login at the <a href="{{route('login')}}"><span class="text-success">login page</a></a>.</p>
               <div class="bg-white p-4 sm:px-6 sm:py-4 border-b border-gray-150">
                @if(session()->has('success'))
                <div class="card-header bg-success">
                    <h4 class="mb-0 text-white">{{session('success')}}</h4>
                </div>
                @endif
            <form class="form-horizontal" wire:submit.prevent="saveClientInfo">
                <fieldset id="account">
                    <legend>Your Personal Details</legend>
                    <div class="form-group">
                        <label for="input-firstname" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Names"  wire:model="name">
                            @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-email" class="col-sm-2 control-label">E-Mail</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="E-Mail" value="" wire:model="email">
                            @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-telephone" class="col-sm-2 control-label">Telephone</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="telephone" placeholder="Telephone" maxLength="13" wire:model="telephone">
                            @error('telephone') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </fieldset>
                <fieldset id="address">
                    <legend>Your Address</legend>
                    <div class="form-group">
                        <label for="input-address-1" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" placeholder="Delivery Address"  wire:model="address">
                        @error('address') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-address-2" class="col-sm-2 control-label">Division</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="division" placeholder="Your Division"  wire:model="division">
                        @error('division') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-city" class="col-sm-2 control-label">Street</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="street" placeholder="Delivery Street"  wire:model="street">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-postcode" class="col-sm-2 control-label">Plot Number (Optional)</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="plot_number" placeholder="Delivery Plot Number"  wire:model="plot_number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-postcode" class="col-sm-2 control-label">Town</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="town" placeholder="Delivery Town"  wire:model="town">
                            @error('town') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Your Password</legend>
                    <div class="form-group">
                        <label for="input-password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" placeholder="Password" wire:model="password" >
                            @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-confirm" class="col-sm-2 control-label">Password Confirm</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="confirm_password" placeholder="Password Confirm" wire:model="confirm_password">
                            @error('confirm_password') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Newsletter</legend>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Subscribe</label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" value="1" wire:model="newsletter">
                                Yes</label>
                            <label class="radio-inline">
                                <input type="radio" checked="checked" value="0" wire:model="newsletter">
                                No</label>
                                @error('newsletter') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </fieldset>
                <input type="hidden" value="3" name="user_type">
                <div class="buttons">
                    <div class="pull-right">I have read and agree to the <a class="agree" href="#"><b>Privacy Policy</b></a>
                        <input type="checkbox" value="1" name="agree">
                        &nbsp;
                        <button class="g-recaptcha" 
                        data-sitekey="6LdqI8AgAAAAAPnFFULg_ehjau8t_izNz-M9MNIy" 
                        data-callback='onSubmit' 
                        data-action='submit' type="submit" class="btn btn-primary" value="Continue" style="background:#55ad37; color:#fff;">Continue </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
