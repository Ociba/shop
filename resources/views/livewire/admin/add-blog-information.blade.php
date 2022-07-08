<div>
    {{-- The whole world belongs to you. --}}
    @livewireStyles
    <form  class="m-2" wire:submit.prevent="createBlog">
       
    <h5 class="modal-title mb-3">Add Blog Information</h5>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group fill">
                    <label class="floating-label" for="Title">Title</label>
                    <input type="text" class="form-control" id="Title" wire:model="title" placeholder="">
                    @error('title') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group fill">
                    <label class="floating-label" for="Photo">Photo</label>
                    <input type="file" class="form-control" id="Image" wire:model="image" placeholder="">
                    @error('image') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="floating-label" for="Content">Content <span class="text-danger">*</span></label>
                    <textarea type="text" class="form-control" id="Content" wire:model="content" rows="4" placeholder="Write brief notes"></textarea>
                    @error('content') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-12 text-center">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    @livewireScripts
</div>
