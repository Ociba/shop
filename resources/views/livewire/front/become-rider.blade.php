<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <form class="form-horizontal" wire:submit.prevent="saveRiderDetails">
       @if(session()->has('success'))
        <div class="card-header bg-success">
            <h4 class="mb-0 text-white" style="color:#ffffff;">{{session('success')}}</h4>
        </div>
        @endif
        <div class="form-group required">
            <label for="input-country" class="col-sm-2 control-label">Full Names</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Names" placeholder="Identity Card Names"  wire:model="name">
            </div>
        </div>
        <div class="form-group required">
            <label for="input-zone" class="col-sm-2 control-label">Nin No. </label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="NIN" placeholder="National Identification Number"  wire:model="nin">
            </div>
        </div>
        <div class="form-group required">
            <label for="input-postcode" class="col-sm-2 control-label">Phone Number</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="PhoneNumber" placeholder="Current Phone Number" value="" wire:model="phone_number">
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
