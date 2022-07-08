<div>
    {{-- In work, do what you enjoy. --}}
    <div class="row latest-grid product-grid">
        @foreach($get_accomodation as $accomodation)
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 product-grid-item text-center">
            <div class="product-thumb transition">
                <div class="caption product-detail">
                    @php
                    $count_accomodation =\DB::table('acomodations')->join('categories','categories.id','acomodations.category_id')->where('acomodations.category_id',$accomodation->category_id)->groupBy('category_id')->count();
                    @endphp
                    <h4 class="product-name"><a href="/accomodation/get-categorized-accomodation-and-property/{{ $accomodation->category_id}}" title="View More accomodation & Properties"> {{$accomodation->category}} <span style="color:green;">({{$count_accomodation}})</span></a></h4>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
