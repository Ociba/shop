<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <form wire:submit.prevent="addShopDiscount">
        <div class="row m-4">
            <div class="row col-lg-12 col-sm-12 col-md-12">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <label for="Discount">Shop Discount Percentage<span style="color:red">*</span></label>
                    <input type="text" wire:model="discount" id="Discount" placeholder="e.g 20,10" class="form-control">
                    @error('discount') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 m-2 text-center">
                    <button class="btn btn-sm btn-primary">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
