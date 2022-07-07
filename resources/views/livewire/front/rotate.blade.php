<div>
    {{-- Be like water. --}}
    <div class="container">
        <div class="carousel">
            <div class="carousel__face"><span>This is something</span></div>
            <div class="carousel__face"><span>Very special</span></div>
            <div class="carousel__face"><span>Special is the key</span></div>
            <div class="carousel__face"><span>For you</span></div>
            <div class="carousel__face"><span>Just give it</span></div>
            <div class="carousel__face"><span>A try</span></div>
            <div class="carousel__face"><span>And see</span></div>
            <div class="carousel__face"><span>How IT Works</span></div>
            <div class="carousel__face"><span>Woow</span></div>
        </div>
    </div>
</div>

<style>
  .carousel {
    position: absolute;
    width: 100%;
    height: 100%;
    transform-style: preserve-3d; 
    animation: rotate360 60s infinite forwards linear;
  }
  .carousel__face { 
    position: absolute;
    width: 300px;
    height: 187px;
    top: 20px;
    left: 10px;
    right: 10px;
    background-size: cover;
    box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);
    display: flex;
  }
  
  span {
    margin: auto;
    font-size: 2rem;
  }
  
  
  .carousel__face:nth-child(1) {
    background-image: url("{{asset('front/image/banners/subbanner2.jpg')}}");
    transform: rotateY(  0deg) translateZ(430px); }
  .carousel__face:nth-child(2) { 
    background-image: url("{{asset('front/image/banners/subbanner3.jpg')}}");
      transform: rotateY( 40deg) translateZ(430px); }
  .carousel__face:nth-child(3) {
    background-image: url("{{asset('front/image/banners/subbanner1.jpg')}}");
    transform: rotateY( 80deg) translateZ(430px); }
  .carousel__face:nth-child(4) {
    background-image: url("{{asset('front/image/banners/subbanner2.jpg')}}");
    transform: rotateY(120deg) translateZ(430px); }
  .carousel__face:nth-child(5) { 
    background-image: url("{{asset('front/image/banners/subbanner3.jpg')}}");
   transform: rotateY(160deg) translateZ(430px); }
  .carousel__face:nth-child(6) { 
    background-image: url("{{asset('front/image/banners/subbanner1.jpg')}}");
   transform: rotateY(200deg) translateZ(430px); }
  .carousel__face:nth-child(7) { 
    background-image: url("{{asset('front/image/banners/subbanner2.jpg')}}");
   transform: rotateY(240deg) translateZ(430px); }
  .carousel__face:nth-child(8) {
    background-image: url("{{asset('front/image/banners/subbanner3.jpg')}}");
    transform: rotateY(280deg) translateZ(430px); }
  .carousel__face:nth-child(9) {
    background-image: url("{{asset('front/image/banners/subbanner1.jpg')}}");
    transform: rotateY(320deg) translateZ(430px); }
  
  
  
  @keyframes rotate360 {
    from {
      transform: rotateY(0deg);
    }
    to {
      transform: rotateY(-360deg);
    }
  }
</style>  