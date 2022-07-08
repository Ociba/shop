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
<body class="account-login col-2">
<header>
    @include('frontlayouts.topheader')
    @include('frontlayouts.middle-topheader')
</header>
@include('frontlayouts.menu')
<div class="container">
  @include('frontlayouts.breadcrumb')
  @livewire('front.login')
</div>
@include('frontlayouts.footer')

</body>

@include('frontlayouts.javascript')
</html>
