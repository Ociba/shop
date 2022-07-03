<div>
    {{-- Be like water. --}}
    <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="sendMessage">
        <fieldset>
          <h3>Contact Form</h3>
          @if(session()->has('success'))
          <div class="card-header bg-success">
              <h4 class="mb-0 text-white" style="color:#ffffff">{{session('success')}}</h4>
          </div>
          @endif
          <div class="form-group">
            <label for="input-name" class="col-sm-2 control-label">Your Name <span style="color:red;">*</span></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-name" placeholder="Full Names" wire:model="senders_name">
              @error('senders_name') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
          </div>
          <div class="form-group">
            <label for="input-email" class="col-sm-2 control-label">Contact <span style="color:red;">*</span></label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="input-email" placeholder="phone Number" wire:model="contact">
              @error('contact') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
          </div>
          <div class="form-group">
            <label for="input-enquiry" class="col-sm-2 control-label">Enquiry <span style="color:red;">*</span></label>
            <div class="col-sm-10">
              <textarea class="form-control" id="input-enquiry" rows="5" vplaceholder="Write Your Message Here" wire:model="enquiry"></textarea>
              @error('enquiry') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
          </div>
        </fieldset>
        <div class="buttons">
          <div class="pull-right">
            <input type="submit" value="Submit" class="btn btn-primary">
          </div>
        </div>
      </form>
</div>
