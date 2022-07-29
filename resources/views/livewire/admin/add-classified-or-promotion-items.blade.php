<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    @livewireStyles
    <form  class="m-2" wire:submit.prevent="createShopItemClassfication">
        @if(session()->has('success'))
        <div class="card-header bg-success">
            <h4 class="mb-0 text-white">{{session('success')}}</h4>
        </div>
        @endif
    <h5 class="modal-title mb-3">Add Classified Shop Items</h5>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="floating-label" for="Category">Category</label>
                    <select class="form-control" wire:model="item_category_id">
                        @foreach($items_category as $category)
                        <option value="{{$category->id}}">{{$category->item}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group fill">
                    <label class="floating-label" for="ItemName">Item Name</label>
                    <input type="text" class="form-control" id="itemName" wire:model="item_name" placeholder="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group fill">
                    <label class="floating-label" for="Price">Price</label>
                    <input type="number" class="form-control" id="Size" wire:model="price" placeholder="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group fill">
                    <label class="floating-label" for="Number">Number of Items</label>
                    <input type="text" class="form-control" id="Number" wire:model="number" placeholder="e.g 5">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group fill">
                    <label class="floating-label" for="Photo">Item Photo <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" id="Photo" wire:model="photo" placeholder="">
                    @error('photo') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="floating-label" for="Classification">Classification</label>
                    <select class="form-control" wire:model="classification">
                        <option value="classified">Classified</option>
                        <option value="promotion">Promotion</option>
                    </select>
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
                <button class="btn btn-danger">Clear</button>
            </div>
        </div>
    </form>
    @livewireScripts
</div>
