<div>
    {{-- The Master doesn't talk, he acts. --}}
    @livewireStyles
    <form  class="m-2" wire:submit.prevent="createSlider">
       
    <h5 class="modal-title mb-3">Add Slider Photo</h5>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group fill">
                    <label class="floating-label" for="Image">Slider Photo</label>
                    <input type="file" class="form-control" id="Image" wire:model="image" placeholder="">
                    @error('image') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-12 text-center">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    @livewireScripts
</div>
