<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="panel panel-default filter">
        <div class="panel-heading columnblock-title">Refine Search</div>
        <div class="filter-block">
          <div class="list-group"> <a class="list-group-item">Color</a>
            <div class="list-group-item">
              <div id="filter-group1">
                <label class="checkbox">
                  <input name="filter[]" type="checkbox" value="1" />
                  Black (7)</label>
                <label class="checkbox">
                  <input name="filter[]" type="checkbox" value="2" />
                  Blue (6)</label>
                <label class="checkbox">
                  <input name="filter[]" type="checkbox" value="3" />
                  Red (6)</label>
              </div>
            </div>
            <a class="list-group-item">Price</a>
            <div class="list-group-item">
              <div id="filter-group2">
                <label class="checkbox">
                  <input name="filter[]" type="checkbox" value="4" />
                  $100-$300 (6)</label>
                <label class="checkbox">
                  <input name="filter[]" type="checkbox" value="5" />
                  $301-$1000 (6)</label>
              </div>
            </div>
            <a class="list-group-item">Size</a>
            <div class="list-group-item">
              <div id="filter-group3">
                <label class="checkbox">
                  <input name="filter[]" type="checkbox" value="6" />
                  Big (3)</label>
                <label class="checkbox">
                  <input name="filter[]" type="checkbox" value="7" />
                  Medium (3)</label>
                <label class="checkbox">
                  <input name="filter[]" type="checkbox" value="8" />
                  Small (1)</label>
              </div>
            </div>
          </div>
          <div class="panel-footer text-right">
            <button type="button" id="button-filter" class="btn btn-primary">Refine Search</button>
          </div>
        </div>
      </div>
      <div class="banner" >
        <div class="item"> <a href="#"><img src="{{ asset('front/image/banners/LeftBanner.jpg')}}" alt="Left Banner" class="img-responsive" /></a> </div>
      </div>
</div>
