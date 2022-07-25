<div>
    <div class="row">
        <div class="cms_banner">
           @foreach($get_items_on_promotion as $discount)
            <div class="col-md-4 cms-banner-left"> <a href="#"><img alt="#" src="{{asset('storage/promotion/'.$discount->image)}}"></a> </div>
            @endforeach
        </div>
    </div>
</div>

{{--<div>
    <div class="row" style="
    margin-bottom:20%;">
        <div class="cms_banner">
            <div class="col-md-2 cms-banner-left"> </div>
            <div class="col-md-6 cms-banner-middle">@livewire('front.rotate')</div>
            <div class="col-md-2 cms-banner-right"></div>
        </div>
    </div>
</div>
--}}
