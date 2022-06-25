{{--<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>--}}
<!DOCTYPE html>
<html lang="en">

<head>
@include('frontlayouts.title')
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
@include('frontlayouts.css')
</head>
<body>
@include('frontlayouts.preloader')
<header>
    @include('frontlayouts.topheader')
    @include('frontlayouts.middle-topheader')
</header>
@include('frontlayouts.menu')
<div class="container">
  @include('frontlayouts.breadcrumb')
  <div class="row">
    <column id="column-left" class="col-sm-3 hidden-xs column-left">
      <div class="column-block">
        <div class="columnblock-title">Affiliate</div>
        <div class="affiliate-block">
          <div class="list-group"> <a href="login.html" class="list-group-item">Login</a> <a href="register.html" class="list-group-item">Register</a> <a href="forgetpassword.html" class="list-group-item">Forgotten Password</a> <a href="#" class="list-group-item">My Account</a> <a href="3.html" class="list-group-item">Payment Options</a> <a href="#" class="list-group-item">Affiliate Tracking</a> <a href="#" class="list-group-item last">Transactions</a> </div>
        </div>
      </div>
    </column>
    <div id="content" class="col-sm-9">
      <h1>Forgot Your Password?</h1>
      <p>Enter the e-mail address associated with your account. Click submit to have your password e-mailed to you</p>
      @livewire('front.forgot-password')
    </div>
  </div>
</div>
@include('frontlayouts.footer')
</body>
@include('frontlayouts.javascript')
</html>

