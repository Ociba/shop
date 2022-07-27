<div>
    {{-- Success is as dangerous as failure. --}}
    <form class="form-horizontal" wire:submit.prevent="submitPartnerInfo">
        @if(session()->has('success'))
        <div class="card-header bg-success">
            <h4 class="mb-0 text-white" style="color:#ffffff;">{{session('success')}}</h4>
        </div>
        @endif
        <div class="form-group required">
            <label for="input-zone" class="col-sm-2 control-label">District</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="District" placeholder="Disrict"  wire:model="district">
            </div>
            </div>
            <div class="form-group required">
            <label for="input-zone" class="col-sm-2 control-label">Business Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="BusinessName" placeholder="eg Shop, Agriculture Equipments,Food"  wire:model="business_type">
            </div>
            </div>
            <div class="form-group required">
            <label for="input-country" class="col-sm-2 control-label">Type of Establishment</label>
            <div class="col-sm-10">
                <select class="form-control" id="input-country" wire:model="type">
                <option value=""> --- Please Select --- </option>
                <option value="restaurant">Restaurant</option>
                <option value="hotel">Hotel</option>
                <option value="shop">Shop</option>
                <option value="supermarket">Supermarket</option>
                <option value="equipments">Equipments</option>
                </select>
            </div>
            </div>
            <div class="form-group required">
            <label for="input-zone" class="col-sm-2 control-label">NIN Number</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="NIN" placeholder="National Identification Number "  wire:model="nin">
            </div>
            </div>
            <div class="form-group required">
            <label for="input-postcode" class="col-sm-2 control-label">Phone Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Contact" placeholder="Which is Available 24/7"  wire:model="contact">
            </div>
            </div>
            <div class="buttons">
            <div class="pull-center">
                <button class="g-recaptcha" 
                data-sitekey="6LcxviIhAAAAALKFtZk9-AWvPOVc5wCSIMV-LnHa" 
                data-callback='onSubmit' 
                data-action='submit' type="submit" value="Send Your Details" class="btn btn-primary" style="background:#55ad37; color:#fff;"> Send Your Details
                </button>
            </div>
        </div>
        </form>
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <script>
            function onSubmit(token) {
                    document.getElementById("demo-form").submit();
                }
        </script>
</div>
