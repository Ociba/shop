@if($errors->any())
    <div class="alert onp-sl-group-error alert-dismissible show" style="background-color:red; color:#ffffff;" role="alert">
        {{ $errors->first() }}
        {{--<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        --}}
    </div>
@endif

@if(session()->has('msg'))
    <div class="alert btn-success alert-dismissible show" style="background-color:green; color:#ffffff;" role="alert">
        {{ session()->get('msg') }}
        {{--<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        --}}
    </div>
@endif