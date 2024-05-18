@extends('layouts.master')

@section('title', ' slider')

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
<div class="end-header">
      FREE SHIPPING ON ORDERS ABOVE RS. 2500
    </div>
<div class="image-slider">
    ghJHHUGAGHHQ
</div>



<!-- <script
  type="text/javascript"
  src="https://code.jquery.com/jquery-1.11.0.min.js"
></script>
<script
  type="text/javascript"
  src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
></script>
<script
  type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
></script>

<script src="./app.js"></script> -->

@stop

@section('scripts')
<!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script> -->

<script type="text/javascript">
    $(document).ready(function(){
      $('.image-slider').slick();
    });
</script>
@stop