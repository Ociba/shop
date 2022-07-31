<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="col-sm-9" id="content">
        <h1>Register Account</h1>
        <p>If you already have an account with us, please login at the <a href="{{route('login')}}"><span class="text-success">login page</a></a>.</p>
        <p style="color:red;"><b>Note: All the information required below will be confidential, We shall only display  Contact Number</b></p>
        <div class="bg-white p-4 sm:px-6 sm:py-4 border-b border-gray-150">
            @if(session()->has('success'))
            <div class="card-header bg-success">
                <h4 class="mb-0 text-white">{{session('success')}}</h4>
            </div>
            @endif
            <form class="form-horizontal" wire:submit.prevent="submitRegistration">
                <fieldset id="account">
                    <legend>Your Personal Details</legend>
                    <div class="form-group">
                        <label for="input-firstname" class="col-sm-2 control-label">Name <span style="color:red;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Names"  wire:model="name">
                            @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-email" class="col-sm-2 control-label">E-Mail <span style="color:red;">*</span></label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="E-Mail" value="" wire:model="email">
                            @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-telephone" class="col-sm-2 control-label">Telephone <span style="color:red;">*</span></label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="telephone" placeholder="Contact Phone Number" maxLength="13" wire:model="telephone">
                            @error('telephone') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </fieldset>
                <fieldset id="address">
                    <legend>Your Address</legend>
                    <div class="form-group">
                        <label for="input-address-1" class="col-sm-2 control-label">Address <span style="color:red;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="address" placeholder="Your Address"  wire:model="address">
                            @error('address') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-address-2" class="col-sm-2 control-label">County <span style="color:red;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="division" placeholder="Your County"  wire:model="division">
                            @error('division') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-city" class="col-sm-2 control-label">Subcounty <span style="color:red;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="street" placeholder="Sub County"  wire:model="street">
                            @error('street') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-postcode" class="col-sm-2 control-label">Village <span style="color:red;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="plot_number" placeholder="Village"  wire:model="plot_number">
                            @error('plot_number') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-postcode" class="col-sm-2 control-label">District <span style="color:red;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="town" placeholder="District"  wire:model="town">
                            @error('town') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Your Password</legend>
                    <div class="form-group">
                        <label for="input-password" class="col-sm-2 control-label">Password <span style="color:red;">*</span></label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" placeholder="Password" wire:model="password"  >
                            @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-confirm" class="col-sm-2 control-label">Password Confirm <span style="color:red;">*</span></label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="confirm_password" placeholder="Password Confirm" wire:model="confirm_password">
                            @error('confirm_password') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Choose what You Are Advertising For</legend>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Chose One <span style="color:red;">*</span></label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                            <input type="radio" checked="checked" value="2" wire:model="user_type" checked>
                            Accomodation </label>
                            <label class="radio-inline">
                            <input type="radio"  value="4" wire:model="user_type">
                            Agriculture Produce</label>
                            @error('user_type') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </fieldset>
                <button   type="submit" class="btn btn-primary" style="background-color:#55ad37; color:#ffffff;" value="Continue">Continue 
                </button>
            </form>
        </div>
    </div>
</div>