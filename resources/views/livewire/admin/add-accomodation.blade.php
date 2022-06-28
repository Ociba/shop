<div>
    {{-- Success is as dangerous as failure. --}}
    @livewireStyles
    <form  class="m-2" wire:submit.prevent="createAccomodation">
        @if(session()->has('success'))
        <div class="card-header bg-success">
            <h4 class="mb-0 text-white">{{session('success')}}</h4>
        </div>
        @endif
    <h5 class="modal-title mb-3">Add Accomodation</h5>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="floating-label" for="Category">Category</label>
                    <select class="form-control" wire:model="category_id">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group fill">
                    <label class="floating-label" for="PropertySize">Property Size</label>
                    <input type="text" class="form-control" id="Size" wire:model="property_size" placeholder="e.g 4 by 6">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group fill">
                    <label class="floating-label" for="Bedroom">Bedrooms</label>
                    <input type="text" class="form-control" id="Bedroom" wire:model="bedroom" placeholder="e.g 5">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="floating-label" for="BathRoom">BatheRooms</label>
                    <input type="text" class="form-control" id="BathRoom" wire:model="bathroom" placeholder="Number of Batheroom">
                </div>
            </div>
            <div class="col-sm-4"> 
                <div class="form-group">
                    <label class="floating-label" for="Garage">Garage</label>
                    <input type="text" class="form-control" id="Garage" wire:model="garage" placeholder="Number of Garages">
                </div>
            </div>
            <div class="col-sm-4"> 
                <div class="form-group">
                    <label class="floating-label" for="Location">Location <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="Location" wire:model="location" placeholder="Property Location">
                    @error('location') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="floating-label" for="Status">Property Status</label>
                    <select class="form-control" wire:model="property_status">
                        <option value="rent">Rent</option>
                        <option value="hire">Hire</option>
                        <option value="sale">For Sale</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group fill">
                    <label class="floating-label" for="Photo">Property Photo <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" id="Photo" wire:model="photo" placeholder="">
                    @error('photo') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-4"> 
                <div class="form-group">
                    <label class="floating-label" for="Price">Price <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="Price" wire:model="price" placeholder="">
                    @error('price') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="floating-label" for="Description">Property Description <span class="text-danger">*</span></label>
                    <textarea type="text" class="form-control" id="Description" wire:model="description" rows="4" placeholder="Write brief notes"></textarea>
                    @error('description') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-12 text-center">
                <button class="btn btn-primary">Submit</button>
                <button class="btn btn-danger">Clear</button>
            </div>
        </div>
    </form>
    @livewireScripts
</div>
