<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    @livewireStyles
    <form  class="m-2" wire:submit.prevent="createNews">
       
    <h5 class="modal-title mb-3">Add News</h5>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group fill">
                    <label class="floating-label" for="Heading">Title</label>
                    <input type="text" class="form-control" id="Heading" wire:model="heading" placeholder="">
                    @error('heading') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group fill">
                    <label class="floating-label" for="Photo">Photo</label>
                    <input type="file" class="form-control" id="Poto" wire:model="photo" placeholder="">
                    @error('photo') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="floating-label" for="Body">Content <span class="text-danger">*</span></label>
                    <textarea type="text" class="form-control" id="Body" wire:model="body" rows="4" placeholder="Write brief notes"></textarea>
                    @error('body') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-12 text-center">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    @livewireScripts
</div>
