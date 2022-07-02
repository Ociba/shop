<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    @livewireStyles
    <form  class="m-2" wire:submit.prevent="addFoodDetails">
       
    <h5 class="modal-title mb-3">Add Food Information</h5>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group fill">
                    <label class="floating-label" for="FoodType">Food Type</label>
                    <input type="text" class="form-control" id="FoodType" wire:model="food_type" placeholder="">
                    @error('food_type') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group fill">
                    <label class="floating-label" for="Amount">Amount</label>
                    <input type="number" class="form-control" id="Amount" wire:model="amount" placeholder="">
                    @error('amount') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group fill">
                    <label class="floating-label" for="Photo">Food Photo <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" id="Photo" wire:model="photo" placeholder="">
                    @error('photo') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="floating-label" for="Description">Food Description <span class="text-danger">*</span></label>
                    <textarea type="text" class="form-control" id="Description" wire:model="ingredients" rows="4" placeholder="Write brief notes"></textarea>
                    @error('ingredients') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-12 text-center">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    @livewireScripts
</div>
