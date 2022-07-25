<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
          @foreach($get_user_information as $loggedinuser)
        <div class="card">
                <div class="user-bg"> <img width="100%" alt="user" src="{{asset('front/image/logo1.jpg')}}"> </div>
               
                <div class="card-body">
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-md-12 border-end">
                            <strong>Name</strong>
                            <p>{{$loggedinuser->name}}</p>
                        </div>
                    </div>
                    <hr>
                    <!-- /.row -->
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-md-12"><strong>Email</strong>
                            <p>{{$loggedinuser->email}}</p>
                        </div>
                    </div>
                    <hr>
                    <!-- /.row -->
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-md-6 border-end"><strong>Address</strong>
                            <p>{{$loggedinuser->address}}</p>
                        </div>
                        <div class="col-md-6"><strong>Phone</strong>
                            <p>{{$loggedinuser->telephone}}</p>
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr>
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-md-12"><strong>Payment Status</strong>
                            <p>
                                <br/> {{$loggedinuser->payment_status}}</p>
                        </div>
                    </div>
                    <hr>
                    <br/>
                    {{--<div class="row m-t-15">
                        <div class="col-md-4 col-sm-4 text-center">
                            <p class="text-purple"><i class="ti-facebook"></i></p>
                            <h1>258</h1> </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <p class="text-blue"><i class="ti-twitter"></i></p>
                            <h1>125</h1> </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <p class="text-danger"><i class="ti-google"></i></p>
                            <h1>140</h1> </div>
                    </div>
                    --}}
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-body">
                    <hr>
                    <h4 class="card-title font-weight-bold">Update Your Information</h4>
                    <form class="form pt-3" wire:submit.prevent="updateClientInfo">
                        <div class="form-group">
                            <label class="form-label">New Password</label>
                            <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon33"><i class="ti-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Password" aria-label="Password" wire:model="password" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Confirm Password</label>
                            <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon4"><i class="ti-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Confirm Password"  aria-label="Password" aria-describedby="basic-addon4">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success me-2 mb-2 text-white">Submit</button>
                    </form>
                    @if(session()->has('success'))
                    <div class="card-header">
                        <h4 class="mb-0 text-white">{{session('success')}}</h4>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
