<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <form wire:submit.prevent="addEquipmentDiscount">
        <div class="row m-4">
            <div class="row col-lg-12 col-sm-12 col-md-12">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <label for="Discount">Discount Percentage<span style="color:red">*</span></label>
                    <input type="text" wire:model="equipment_discount" id="Discount" placeholder="e.g 20,10" class="form-control">
                    @error('equipment_discount') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 m-2 text-center">
                    <button class="btn btn-sm btn-primary">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
