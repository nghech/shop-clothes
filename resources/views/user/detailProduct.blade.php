@extends('layouts.master')

@section('title', 'Detail')

@section('styles')
<style>
    .navbar {
        font-size: 16px;
        font-weight: 400;
        background-color: white;
      
    }
    /* .navbar-item {
        
    } */
    .navbar-brand {
        color: #100d0d !important;
        font-weight: 700;
        font-size: 20px;
    }

    .end-header {
        width: 100%;
        height: 32px;
        background-color: #100d0d;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        font-size: 9px;
    }

    .start-footer {
        width: 100%;
        border-bottom-color: #D9D9D9;
        margin-bottom: 40px;
    }

    .cart {
        align-items: center;
        display: flex;
        margin-left: 5px;
    }

    .detail-product-wrapper {
        display: grid;
        grid-template-columns: 1fr 5fr 6fr;
        grid-template-rows: 785px;
        padding: 70px 50px 0 50px;
    }

    .detail-product-list {
        list-style: none;
        padding-top: 193px;
    }

    .detail-product-list li:nth-last-child(-n+2) {
        padding-left: 22px;
        /* Các phần tử <li> cuối cùng sẽ được căn giữa */
    }

    .detail-product-list li {
        margin-top: 24px;
    }

    .detail-product-img {

        /* border: 1px solid black; */
        min-height: 50px;
    }

    .img-product {
        max-height: 100%;
        margin-left: 30px;
    }

    .detail-product-info {
        margin-top: 26px;
        margin-left: 45px;
    }

    .detail-product-info p {
        font-size: 16px;
    }

    .checked {
        color: gold;
        padding-left: 1px;
        display: inline-block;
        margin-right: 5px;
    }

    .rating {
        padding-top: 18px;
        padding-bottom: 18px;
    }

    .size-button {
        display: inline-block;
        padding: 5px;
        width: 40px;
        height: 40px;
        border: 1.8px solid #ccc;
        background-color: #fff;
        cursor: pointer;
        border-radius: 12px;
        margin-right: 20px;
        margin-bottom: 40px;
    }

    .size-button.selected {
        background-color: #000;
        color: #fff;
    }

    .color-picker {
        display: flex;
        margin-top: 20px;
    }

    .color-option {
        width: 25px;
        height: 25px;
        border-radius: 50%;
        margin-right: 10px;
        cursor: pointer;
        margin-right: 23px;
    }

    .button-cart {
        display: flex;
        align-items: center;
        margin-top: 30px;
        margin-bottom: 19px;
    }

    .btn {
        margin-right: 15px;
        display: flex;
        width: 227px;
        height: 45px;
        gap: 20px;
        /* Độ dài mong muốn */
        padding: 10px;
        align-items: center;
        border: 1px solid black;
        border-radius: 0 !important;
        justify-content: center;
    }

    .bag-outline {
        padding-left: 15px;
    }

    .button-text {
        font-size: 14px;
    }

    .price-box {
        width: 178px;
        height: 45px;
        border: 1px solid black;
        font-weight: 400;
        letter-spacing: 9%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #3C4242;
    }

    .horizontal-line {
        border-bottom: 1px solid black;
        margin-top: 50px;
        border-bottom-color: #ccc;
        width: 534px;
    }

    .support {
        display: grid;
        max-width: 100%;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 97px;
        margin-top: 29px;
        font-weight: 600;
    }

    .bestseller {
        font-weight: 400;
        font-size: 30px;
        line-height: 10px;
    }

    .card-list {
        text-align: center;
        display: flex;
        flex-wrap: wrap;
        margin-left:-45px;
        margin-right: -45px;
        margin-bottom: 45px;
    }

    .product-img {
        background-image: url("{{ asset('/image/image/product/Rectangle13.png') }}");
        height: 348px;
        background-size: cover;
    }

    .product {
        width: 307px;
        border: 0 !important;
        flex-basis: calc(25% - 20px);
        margin-right: 20px;
    }

    .card-list .product:last-child {
        margin-right: 0;
    }

    .product-color {
        display: flex;
        flex-direction: row;
        justify-content: center;
        margin-top: 5px;
    }

    .box-left {
        border-width: 3px;
        margin-right: 5px;
        width: 30px;
        height: 30px;
        background-color: #AB6B26;
    }

    .box-right {
        border-width: 3px;
        margin-left: 5px;
        width: 30px;
        height: 30px;
        background-color: #E1C5CA;
    }

    .container {
        margin-top: 20px;
    }

    .content-carousel {
        width: 400px;
        display: flex;
        margin-right: 100px;
    }

    .owl-carousel {
        width: calc(100% - 170px);
        display: flex;
        align-items: center;
        margin-left: 30px;
        width: 380px;
    }

    .owl-carousel .owl-dots {
        width: 150px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .owl-carousel .owl-dot {
        width: 50px;
        height: 50px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        margin-bottom: 10px;
    }

    .owl-carousel .owl-dot.active {
        opacity: 0.5;
    }

    .owl-dots {
        order: -1;
        display: flex;
        flex-direction: column;
        height: 200px;
        margin-top: 200px;
    }

    .own-item img {
        width: 100%;
    }
</style>
@stop

@section('content')
<div class="detail-product-wrapper">
    <div>   
        <div class="content-carousel">
        <div class="owl-carousel">
            <div style="width:400px" class="own-item"><img src="{{ asset('/image/image/product/image3_2.png') }}"> </div>
            <div style="width:400px" class="own-item"><img src="{{ asset('/image/image/product/image3_1.png') }}"> </div>
            <div style="width:400px" class="own-item"><img src="{{ asset('/image/image/product/image2_3.png') }}"> </div>
        </div>
        <div class="owl-dots"></div>
        </div>
    </div>
    
    <div class="detail-product-info">
        <p style="color: #807D7E">MEN <img src="{{ asset('/image/image/icon/left.svg') }}"> T-SHIRTS <img src="{{ asset('/image/image/icon/left.svg') }}"> POLO </p>
        <p>
        <h2 style="font-weight: 400; font-size: 32px">TENCIL BLEND POLO</h2>
        </p>
        <p>MAS24TP005-SML-BRN</p>
        <p class="rating" style="color: #807D7E">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <img style="padding-left: 25px" src="{{ asset('/image/image/icon/icon.svg') }}">
            120 COMMENTS
        </p>
        <p style=" word-spacing: 3px; color: #807D7E"><b style="font-weight: 600; padding-right:15px; color: black">SELECT SIZE</b> SIZE GUIDE <img style="padding-left: 12px" src="{{ asset('/image/image/icon/arrow.svg') }}"></p>
        <div>
            <button class="size-button">XS</button>
            <button class="size-button">S</button>
            <button class="size-button">M</button>
            <button class="size-button">L</button>
            <button class="size-button">XL</button>
        </div>
        <p><b style="font-weight: 600;">COLOUR AVAILABLE</b></p>
        <div class="color-picker">
            <div class="color-option" style="background-color: #41597F;"></div>
            <div class="color-option" style="background-color: black;"></div>
            <div class="color-option" style="background-color: #E6E6E6;"></div>
            <div class="color-option" style="background-color: #2B7FFF;"></div>
        </div>
        <div class="button-cart">
            <button class="btn btn-dark">
                <img class="nav-item bag-outline" src="{{ asset('/image/image/icon/Bag-Outline.svg') }}">
                <span class="button-text">ADD TO CART</span>
            </button>
            <div class="price-box">RS. 9,950.00</div>
        </div>
        <div><button class="btn btn-dark" style="width: 373px; font-size: 14px">BUY NOW</button></div>
        <div class="horizontal-line"></div>
        <div class="support">
            <div class="item-1 item">
                <img src="{{ asset('/image/image/icon/Frame24.svg') }}">
                <span>SECURE PAYMENT</span>
            </div>
            <div class="item-2 item">
                <img src="{{ asset('/image/image/icon/Frame25.svg') }}">
                <span>SIZE & FIT</span>
            </div>
            <div class="item-3 item">
                <img src="{{ asset('/image/image/icon/Frame26.svg') }}">
                <span>FREE SHIPPING</span>
            </div>
            <div class="item-4 item">
                <img src="{{ asset('/image/image/icon/Frame27.svg') }}">
                <span>FREE SHIPPING & RETURNS</span>
            </div>
        </div>
    </div>

</div>
<div class="container">
    <div class=" p-5 rounded mt-3 text-center">
        <h3 class="bestseller">BESTSELLERS</h3>
    </div>
    <div class="card-list">
        <div class="card d-flex flex-column product">
            <div class="product-img"></div>
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
    <div class="card-list">
        <div class="card d-flex flex-column product">
            <div class="product-img"></div>
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

@stop

@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var buttons = document.querySelectorAll(".size-button");
        buttons.forEach(function(button) {
            button.addEventListener("click", function() {
                buttons.forEach(function(btn) {
                    btn.classList.remove("selected");
                });
                this.classList.add("selected");
            });
        });
    });
    // Lấy danh sách tất cả các ô màu
    var colorOptions = document.querySelectorAll('.color-option');

    // Gắn sự kiện click cho từng ô màu
    colorOptions.forEach(function(colorOption) {
        colorOption.addEventListener('click', function() {
            // Lấy màu nền của ô màu được chọn
            var selectedColor = this.style.backgroundColor;

            // Thực hiện xử lý khi ô màu được chọn
            console.log('Màu đã chọn:', selectedColor);
            // Hoặc thực hiện các hành động khác tùy vào yêu cầu của bạn
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function(){

        $(".owl-carousel").owlCarousel({    
            loop:true,
            items:1,
            margin:0,
            stagePadding: 0,
            autoplay:false,
            dotsContainer: '.owl-dots',
            dotsEach: true
        });

        $(".owl-dot").each(function() {
            $(this).css({
                "width": "50px",
                "height": "50px",
                "background-size": "cover",
                "background-position": "center",
                "background-repeat": "no-repeat",
                "margin-bottom": "10px"
            });
        });

        dotcount = 1;

        jQuery('.owl-dot').each(function() {
            jQuery( this ).addClass( 'dotnumber' + dotcount);
            jQuery( this ).attr('data-info', dotcount);
            dotcount=dotcount+1;
        });

        slidecount = 1;

        jQuery('.owl-item').not('.cloned').each(function() {
            jQuery( this ).addClass( 'slidenumber' + slidecount);
            slidecount=slidecount+1;
        });

        jQuery('.owl-dot').each(function() {    
            grab = jQuery(this).data('info');        
            slidegrab = jQuery('.slidenumber'+ grab +' img').attr('src');
            jQuery(this).css("background-image", "url("+slidegrab+")");     
        });

        amount = $('.owl-dot').length;
        gotowidth = 100/amount;            
        jQuery('.owl-dot').css("height", gotowidth+"%");

    });
</script>
@stop