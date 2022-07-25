<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <form wire:submit.prevent="makeAccomodationPayments">
        <div class="row m-4">
            <div class="row col-lg-12 col-sm-12 col-md-12">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <label for="Discount">Enter Accomodation Subscription Amount<span style="color:red">*</span></label>
                    <input type="text" wire:model="amount" id="Amount" placeholder="" class="form-control">
                    @error('amount') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 m-2 text-center">
                    <button class="btn btn-sm btn-primary">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
