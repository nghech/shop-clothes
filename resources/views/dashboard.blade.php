@extends('layouts.master')

@section('title', ' Dashboard')

@section('styles')
<style>
      body {
        padding: 0;
      }
      .match-table {
        margin-top: 20px;
      }
      header{
        position: fixed;
        top: 0px;
        z-index: 99;
        background: #fff;
        width: 100vw;
        display: flex;
      }
      .end-header{
        width: 100%;
        height: 32px;
        background-color: #100d0d;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        font-size: 9px;
        margin-top: 57px;
      }
      .icon-tool {
        display: flex;
        gap: 0 10px;
      }
      
      .cart {
        align-items: center;
        display: flex;
        margin-left: 5px;
      }
      
      .menu-list li a {
        color: #100d0d !important;
        font-weight: 400;
      }
      
      .navbar-brand {
        color: #100d0d !important;
        font-weight: 700;
        font-size: 20px;
      }
      
      .banner {
        background-image: url("{{ asset('/image/image/young-friends-sitting-curb-city.svg') }}");
        width: 100%;
        height: 580px;
        background-size: cover;
      
        position: relative;
        display: flex;
        justify-content: center;
        /* margin-top: 50px; */
      }
      
      .banner .banner-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        color: #ffff;
        position: absolute;
        bottom: 100px;
      }
      
      .season-name {
        font-size: 25px;
        font-weight: 300;
      }
      
      .tell {
        font-size: 40px;
        font-weight: 430;
      }
      
      .banner-menu button, .banner-menu button:hover {
        background-color: #fff;
        color: black;
        font-size: 20px;
        
      }
      
      .product-img {
        background-image: url("{{ asset('/image/image/product/image1.png') }}");
        height: 468px;
        background-size: cover;
      }

      .product-bestseller{
        text-decoration: none;
        text-align: center;
        color: #100d0d
      }
      
      .product {
        width: 307px;
        border: none !important;
      }

      .product-color{
        display: flex;
        flex-direction: row;
        justify-content: center;
        margin-top: 5px;
      }
      
      .card-list {
        gap: 0 25px;
        text-align: center;
      }
      
      .box {
        width: 30px;
        height: 30px;
      }

      .match-table {
        margin-top: 20px;
      }
      .bestseller{
        font-weight: 350;
      }
      
      .collection {
        background-image: url("{{ asset('/image/image/image-collection.svg') }}");
        width: 100%;
        height: 580px;
        background-size: cover;
      
        position: relative;
        display: flex;
        justify-content: center;
        margin-top: 40px;
        margin-bottom: 100px;
      }
      
      .collection .collection-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        color: #ffff;
        position: absolute;
        bottom: 100px;
      }
      .box-left{
        border-width: 3px;
        margin-right: 5px;
        width: 30px;
        height: 30px;
        background-color: #ece7e7
        
      }
      .box-right{
        border-width: 3px;
        margin-left: 5px;
        width: 30px;
        height: 30px;
        background-color: #161313
      }
      hr {
        border: none; 
        height: 2px; 
        background-color: rgb(83, 74, 74); 
        margin-top: 70px;
      }
      /* .text-footer{
        font-weight: 30px;
      } */

      

</style>

@stop

@section('content')
dm me lang nhang vcl!!!
<body>
    <div class="end-header">
      FREE SHIPPING ON ORDERS ABOVE RS. 2500
    </div>

    <div class="banner">
      <div class="banner-wrapper">
        <div class="season-name">
          <span>SPRING SUMMER</span>
        </div>
        <div class="tell">
          <span>TELL ME MORE</span>
        </div>
        <div class="banner-menu">
          <button class="btn btn-default">SHOP MEN</button>
          <button class="btn btn-default">SHOP WOMEN</button>
        </div>  
      </div>
    </div>

    <main class="container">
      <div class=" p-5 rounded mt-3 text-center">
        <h3 class="bestseller">BESTSELLER</h3>
        <button type="button" class="btn btn-outline-secondary">VIEW ALL</button>
      </div>
    </main>


  <div class="container">
    <div class="owl-carousel owl-theme">
      <a class="product-bestseller" href="">
        <div class="item">
          <img src="{{ asset('/image/image/product/image1_1.png') }}" alt="">
          <div class="product-name">
            CUTWORK POPLIN DRESS 
          </div>
          <div class="product-price">
            Rs.9,950.00
          </div>
          <div class="product-color">
            <div class="box-left"></div>
            <div class="box-right"></div>
          </div>
        </div>
      </a>

      <a class="product-bestseller" href="">
        <div class="item">
          <img src="{{ asset('/image/image/product/image1_2.png') }}" alt="">
          <div class="product-name">
            CUTWORK POPLIN DRESS 
          </div>
          <div class="product-price">
            Rs.9,950.00
          </div>
          <div class="product-color">
            <div class="box-left"></div>
            <div class="box-right"></div>
          </div>
        </div>
      </a>

      <a class="product-bestseller" href="">
        <div class="item">
          <img src="{{ asset('/image/image/product/image1_3.png') }}" alt="">
          <div class="product-name">
            CUTWORK POPLIN DRESS 
          </div>
          <div class="product-price">
            Rs.9,950.00
          </div>
          <div class="product-color">
            <div class="box-left"></div>
            <div class="box-right"></div>
          </div>
        </div>
      </a>

      <a  class="product-bestseller" href="">
        <div class="item">
          <img src="{{ asset('/image/image/product/image2_1.png') }}" alt="">
          <div class="product-name">
            CUTWORK POPLIN DRESS 
          </div>
          <div class="product-price">
            Rs.9,950.00
          </div>
          <div class="product-color">
            <div class="box-left"></div>
            <div class="box-right"></div>
          </div>
        </div>
      </a>

      <a class="product-bestseller" href="">
        <div class="item">
          <img src="{{ asset('/image/image/product/image2_2.png') }}" alt="">
          <div class="product-name">
            CUTWORK POPLIN DRESS 
          </div>
          <div class="product-price">
            Rs.9,950.00
          </div>
          <div class="product-color">
            <div class="box-left"></div>
            <div class="box-right"></div>
          </div>
        </div>
      </a>

      <a class="product-bestseller" href="">
        <div class="item">
          <img src="{{ asset('/image/image/product/image2_3.png') }}" alt="">
          <div class="product-name">
            CUTWORK POPLIN DRESS 
          </div>
          <div class="product-price">
            Rs.9,950.00
          </div>
          <div class="product-color">
            <div class="box-left"></div>
            <div class="box-right"></div>
          </div>
        </div>
      </a>

      <a class="product-bestseller" href="">
        <div class="item">
          <img src="{{ asset('/image/image/product/image3_1.png') }}" alt="">
          <div class="product-name">
            CUTWORK POPLIN DRESS 
          </div>
          <div class="product-price">
            Rs.9,950.00
          </div>
          <div class="product-color">
            <div class="box-left"></div>
            <div class="box-right"></div>
          </div>
        </div>
      </a>

      <a class="product-bestseller" href="">
        <div class="item">
          <img src="{{ asset('/image/image/product/image3_2.png') }}" alt="">
          <div class="product-name">
            CUTWORK POPLIN DRESS 
          </div>
          <div class="product-price">
            Rs.9,950.00
          </div>
          <div class="product-color">
            <div class="box-left"></div>
            <div class="box-right"></div>
          </div>
        </div>
      </a>

      <a class="product-bestseller" href="">
        <div class="item">
          <img src="{{ asset('/image/image/product/image3_3.png') }}" alt="">
          <div class="product-name">
            CUTWORK POPLIN DRESS 
          </div>
          <div class="product-price">
            Rs.9,950.00
          </div>
          <div class="product-color">
            <div class="box-left"></div>
            <div class="box-right"></div>
          </div>
        </div>
      </a>
    </div>
  </div>
    
    <div class="collection">
      <div class="collection-wrapper">
        <div class="season-name">
          <span>NEW IN</span>
        </div>
        <div class="tell">
          <span>STUDIO COLLECTION</span>
        </div>
        <div class="banner-menu">
          <button class="btn btn-default">SHOP NOW</button>
        </div>  
      </div>
    </div>
  

    <div class="container">
    <div class="owl-carousel owl-theme">
      <a class="product-bestseller" href="">
        <div class="item">
          <img src="{{ asset('/image/image/product/image1_1.png') }}" alt="">
          <div class="product-name">
            CUTWORK POPLIN DRESS 
          </div>
          <div class="product-price">
            Rs.9,950.00
          </div>
          <div class="product-color">
            <div class="box-left"></div>
            <div class="box-right"></div>
          </div>
        </div>
      </a>

      <a class="product-bestseller" href="">
        <div class="item">
          <img src="{{ asset('/image/image/product/image1_2.png') }}" alt="">
          <div class="product-name">
            CUTWORK POPLIN DRESS 
          </div>
          <div class="product-price">
            Rs.9,950.00
          </div>
          <div class="product-color">
            <div class="box-left"></div>
            <div class="box-right"></div>
          </div>
        </div>
      </a>

      <a class="product-bestseller" href="">
        <div class="item">
          <img src="{{ asset('/image/image/product/image1_3.png') }}" alt="">
          <div class="product-name">
            CUTWORK POPLIN DRESS 
          </div>
          <div class="product-price">
            Rs.9,950.00
          </div>
          <div class="product-color">
            <div class="box-left"></div>
            <div class="box-right"></div>
          </div>
        </div>
      </a>

      <a  class="product-bestseller" href="">
        <div class="item">
          <img src="{{ asset('/image/image/product/image2_1.png') }}" alt="">
          <div class="product-name">
            CUTWORK POPLIN DRESS 
          </div>
          <div class="product-price">
            Rs.9,950.00
          </div>
          <div class="product-color">
            <div class="box-left"></div>
            <div class="box-right"></div>
          </div>
        </div>
      </a>

      <a class="product-bestseller" href="">
        <div class="item">
          <img src="{{ asset('/image/image/product/image2_2.png') }}" alt="">
          <div class="product-name">
            CUTWORK POPLIN DRESS 
          </div>
          <div class="product-price">
            Rs.9,950.00
          </div>
          <div class="product-color">
            <div class="box-left"></div>
            <div class="box-right"></div>
          </div>
        </div>
      </a>

      <a class="product-bestseller" href="">
        <div class="item">
          <img src="{{ asset('/image/image/product/image2_3.png') }}" alt="">
          <div class="product-name">
            CUTWORK POPLIN DRESS 
          </div>
          <div class="product-price">
            Rs.9,950.00
          </div>
          <div class="product-color">
            <div class="box-left"></div>
            <div class="box-right"></div>
          </div>
        </div>
      </a>

      <a class="product-bestseller" href="">
        <div class="item">
          <img src="{{ asset('/image/image/product/image3_1.png') }}" alt="">
          <div class="product-name">
            CUTWORK POPLIN DRESS 
          </div>
          <div class="product-price">
            Rs.9,950.00
          </div>
          <div class="product-color">
            <div class="box-left"></div>
            <div class="box-right"></div>
          </div>
        </div>
      </a>

      <a class="product-bestseller" href="">
        <div class="item">
          <img src="{{ asset('/image/image/product/image3_2.png') }}" alt="">
          <div class="product-name">
            CUTWORK POPLIN DRESS 
          </div>
          <div class="product-price">
            Rs.9,950.00
          </div>
          <div class="product-color">
            <div class="box-left"></div>
            <div class="box-right"></div>
          </div>
        </div>
      </a>

      <a class="product-bestseller" href="">
        <div class="item">
          <img src="{{ asset('/image/image/product/image3_3.png') }}" alt="">
          <div class="product-name">
            CUTWORK POPLIN DRESS 
          </div>
          <div class="product-price">
            Rs.9,950.00
          </div>
          <div class="product-color">
            <div class="box-left"></div>
            <div class="box-right"></div>
          </div>
        </div>
      </a>
    </div>
  </div>
  

    <div class="container">
      <hr>
    </div>
</body>

@stop

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin: 20,
    nav: false,
    autoplay:true,
    autopayTimeout: 1000,
    // dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>
<!-- <script>
  var myModal = document.getElementById('#staticBackdrop')
  var myInput = document.getElementById('myInput')

  myModal.addEventListener('shown.bs.modal', function () {
    myInput.focus()
  })
</script> -->

@stop