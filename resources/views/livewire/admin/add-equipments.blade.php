<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    @livewireStyles
    <form  class="m-2" wire:submit.prevent="createEquipment">
       
    <h5 class="modal-title mb-3">Add Equipment Information</h5>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group fill">
                    <label class="floating-label" for="EquipmentName">Equipment Name</label>
                    <input type="text" class="form-control" id="EquipmentName" wire:model="equipment" placeholder="">
                    @error('equipment') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group fill">
                    <label class="floating-label" for="Quantity">Quantity</label>
                    <input type="text" class="form-control" id="Size" wire:model="quantity" placeholder="">
                    @error('quantity') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group fill">
                    <label class="floating-label" for="Price">Price</label>
                    <input type="number" class="form-control" id="Price" wire:model="price" placeholder="">
                    @error('price') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group fill">
                    <label class="floating-label" for="Photo">Item Photo <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" id="Photo" wire:model="photo" placeholder="">
                    @error('photo') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="floating-label" for="Description">Item Description <span class="text-danger">*</span></label>
                    <textarea type="text" class="form-control" id="Description" wire:model="description" rows="4" placeholder="Write brief notes"></textarea>
                    @error('description') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-12 text-center">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    @livewireScripts
</div>
