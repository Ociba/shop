<div>
    {{-- Be like water. --}}
    <div class="row">
    <div class="col-sm-3 hidden-xs column-left" id="column-left">
      <div class="column-block">
        <div class="columnblock-title">Account</div>
        <div class="account-block">
          <div class="list-group"> <a class="list-group-item" href="{{ route('register') }}">Login</a> <a class="list-group-item" href="register.html">Register</a> <a class="list-group-item" href="forgetpassword.html">Forgotten Password</a> <a class="list-group-item" href="#">My Account</a> <a class="list-group-item" href="#">Address Book</a> <a class="list-group-item" href="#">Wish List</a> <a class="list-group-item" href="#">Order History</a> <a class="list-group-item" href="download.html">Downloads</a> <a class="list-group-item" href="#">Reward Points</a> <a class="list-group-item" href="#">Returns</a> <a class="list-group-item" href="#">Transactions</a> <a class="list-group-item" href="#">Newsletter</a><a class="list-group-item last" href="#">Recurring payments</a> </div>
        </div>
      </div>
    </div>
    <div class="col-sm-9" id="content">
      <div class="row">
        <div class="col-sm-6">
          <div class="well">
            <h2>New Customer</h2>
            <p><strong>Register Account</strong></p>
            <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
            <a class="btn btn-primary" href="/register">Continue</a></div>
        </div>
        <div class="col-sm-6">
          <div class="well">
            <h2>Returning Customer</h2>
            <p><strong>I am a returning customer</strong></p>
            <form enctype="multipart/form-data" method="post" action="http://html.lionode.com/focus/login.html">
              <div class="form-group">
                <label for="input-email" class="control-label">E-Mail Address</label>
                <input type="text" class="form-control" id="input-email" placeholder="E-Mail Address" value="" name="email">
              </div>
              <div class="form-group">
                <label for="input-password" class="control-label">Password</label>
                <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password">
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Forgotten Password</a>
                @endif
            </div>
              <input type="submit" class="btn btn-primary" value="Login">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
