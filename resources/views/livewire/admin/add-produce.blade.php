<div>
    {{-- The whole world belongs to you. --}}
    @livewireStyles
    <form  class="m-2" wire:submit.prevent="createProduce">
       
    <h5 class="modal-title mb-3">Add Produce Information</h5>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="floating-label" for="Category">Category</label>
                    <select class="form-control" wire:model="produce_category_id">
                        @foreach($get_produce_category as $category)
                        <option value="{{$category->id}}">{{$category->produce_category}}</option>
                        @endforeach
                    </select>
                    @error('produce_category_id') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group fill">
                    <label class="floating-label" for="ProduceName">Produce Name</label>
                    <input type="text" class="form-control" id="ProduceName" wire:model="produce_name" placeholder="">
                    @error('produce_name') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="floating-label" for="Type">Produce Type</label>
                    <select class="form-control" wire:model="produce_type">
                        <option value="fresh">Fresh</option>
                        <option value="dry">Dry</option>
                        <option value="threshed">Threshed</option>
                        <option value="unthreshed">UnThreshed</option>
                        <option value="boiled">boiled</option>
                        <option value="packed">Packed</option>
                        <option value="local">Local</option>
                        <option value="exotic">Exotic</option>
                        <option value="cross">Cross</option>
                    </select>
                    @error('produce_type') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group fill">
                    <label class="floating-label" for="Quantity">Quantity (kg, Tonnes, Bags,Tray)</label>
                    <input type="text" class="form-control" id="Size" wire:model="quantity" placeholder="">
                    @error('quantity') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group fill">
                    <label class="floating-label" for="Price">Price (Each,Per)</label>
                    <input type="number" class="form-control" id="Price" wire:model="price" placeholder="">
                    @error('price') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group fill">
                    <label class="floating-label" for="PhoneNumber">Phone Number</label>
                    <input type="text" class="form-control" id="PhoneNumber" wire:model="phone_number" placeholder="">
                    @error('phone_number') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group fill">
                    <label class="floating-label" for="Image">Item Photo <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" id="Image" wire:model="image" placeholder="">
                    @error('image') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-6">
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
