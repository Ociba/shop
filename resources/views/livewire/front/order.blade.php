<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="col-sm-9" id="content">
      <h1>Your Order  {{Cart::getTotalQuantity()}} item(s) - ugx:{{ number_format(Cart::getTotal() + 4000) }}</h1>
      @if(session()->has('success'))
      <div class="card-header bg-success">
          <h4 class="mb-0 text-white">{{session('success')}}</h4>
      </div>
      @endif
      @include('layouts.messages')
      <div id="accordion" class="panel-group">
        <div class="panel panel-default">
          <div id="collapse-checkout-confirm" class="panel-collapse collapse in" aria-expanded="true" style="">
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <td class="text-left">Product Name</td>
                      <td class="text-left">Photo</td>
                      <td class="text-right">Quantity</td>
                      <td class="text-right">Unit Price</td>
                      <td class="text-right">Total</td>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($cartItems as $item)
                    <tr>
                      <td class="text-left">{{ $item['name'] }}</td>
                      <td class="text-left"><img src="/storage/shop_items_photos/{{ $item->attributes->image }}" style="height:40px; width:50px;"></td>
                      <td class="text-right">{{ $item['quantity'] }}</td>
                      <td class="text-right">ugx:{{ number_format($item['price']) }}</td>
                      <td class="text-right">ugx:{{ number_format(($item['price']* $item['quantity']))}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
                      <td class="text-right">ugx:{{ number_format(Cart::getTotal()) }}</td>
                    </tr>
                    <tr>
                      <td class="text-right" colspan="4"><strong>Transport</strong></td>
                      <td class="text-right">ugx:4,000</td>
                    </tr>
                    <tr>
                      <td class="text-right" colspan="4"><strong>Total:</strong></td>
                      <td class="text-right">ugx:{{ number_format(Cart::getTotal() + 4000) }}</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class="buttons">
                 <a href="/logout"  class="btn btn-danger" style="padding:8px;" id="" value="Logout">Logout</a>
                 <form action="/submit-order" method="get">
                    @csrf
                    @foreach ($cartItems as $item)   
                    <input type="hidden" name="item_id" value="{{$item['id']}}" class="form-control">
                    <input type="hidden" name="item_name" value="{{$item->name}}" class="form-control">
                    <input type="hidden" name="price" value="{{($item['price'] * $item['quantity'])}}" class="form-control">
                    <input type="hidden" name="quantity" value="{{$item['quantity']}}" class="form-control">
                    @endforeach
                    
                  <div class="pull-right">
                    <button type="submit" data-loading-text="Loading..." class="btn btn-primary" id="button-confirm" value="Submit Order">Submit Your Order</button>
                   
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
