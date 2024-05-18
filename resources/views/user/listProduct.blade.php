@extends('layouts.master')

@section('title', ' List user betting')

@section('styles')
<style>
      body {
        padding: 0;
      }
      .match-table {
        margin-top: 20px;
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
        background-image: url("C:/Users/lenovo/Documents/BTL/image/young-friends-sitting-curb-city.svg");
        width: 100%;
        height: 580px;
        background-size: cover;
      
        position: relative;
        display: flex;
        justify-content: center;
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
        margin-bottom: 50px;
        
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
        background-image: url("{{ asset('/image/image/product/image1.png') }}");
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
        border: none; /* Xóa viền */
        height: 2px; /* Chiều cao thanh ngang */
        background-color: rgb(83, 74, 74); /* Màu nền */
        
      }

      
            

</style>

@stop

@section('content')
<body>
      <div class="end-header">
        FREE SHIPPING ON ORDERS ABOVE RS. 2500
      </div>

      <main class="container">
        <div class=" p-5 rounded mt-3 text-center">
          <button type="button" class="btn btn-outline-secondary">VIEW ALL</button>
        </div>
      </main>
  
      <div class="container">
        <div class="d-flex justify-content-between card-list">
          <div class="card d-flex flex-column product">
            <div class="product-img">
            
            </div>
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
          <div class="card d-flex flex-column product">
            <div class="product-img">
              
            </div>
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
          <div class="card d-flex flex-column product">
            <div class="product-img">
              
            </div>
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
          <div class="card d-flex flex-column product">
            <div class="product-img">
              
            </div>
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
        </div>
      </div>
      
  
      <div class="container">
        <div class="d-flex justify-content-between card-list">
          <div class="card d-flex flex-column product">
            <div class="product-img">
            
            </div>
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
          <div class="card d-flex flex-column product">
            <div class="product-img">
              
            </div>
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
          <div class="card d-flex flex-column product">
            <div class="product-img">
              
            </div>
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
          <div class="card d-flex flex-column product">
            <div class="product-img">
              
            </div>
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
        </div>
      </div>
  
      <div class="container">
        <hr>
      </div>   
</body>


@stop

@section('scripts')

@stop