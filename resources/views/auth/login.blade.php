<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Đăng nhập</title>
</head>
<style>
    .navbar-brand {
        color: #100d0d !important;
        font-weight: 700;
        font-size: 20px;
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
        /* align-items: center; */
        color: #ffff;
        position: absolute;
        bottom: 100px;
        box-shadow: 0 0 10px rgba(1, 0, 0, 1.0);
        background-color: rgba(0, 0, 0, 0.5);
      }
      
      .season-name {
        font-size: 20px;
        font-weight: 700;
        color: #e8d8c5;
        margin-top: 8px;
        margin-left: 10px;
        margin-right: 10px;
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
      .input{
        background-color: transparent;
        border-radius: 10px;
        margin-left: 10px;
        margin-bottom: 8px;
        float: right;
        color: #e8d8c5;
      }
      .banner-menu{
        gap: 20px 10px;
        align-items: center;
        justify-content: center;
        display: flex;
        margin-bottom: 10px;
        background-color: transparent;
      }
      .signin{
        background-color: #f3ebe4 ;
        color: #e8d8c5;
      }
      .form-login{
        text-align: center;
        font-size: 30px;
        font-weight: 700;
        color: #e8d8c5;
      }
</style>
<body>
    <div class="end-header">
      FREE SHIPPING ON ORDERS ABOVE RS. 2500
    </div>

    <div class="banner">
      <div class="banner-wrapper">
        <h4 class="form-login"> LOGIN</h4>
        <div class="season-name">
          <span>Email</span><input name="name" type="text" class="input"  style="border: 2px solid #e8d8c5;"/>
        </div>
        <div class="season-name">
          <span>Password</span><input name="password" type="text" class="input"  style="border: 2px solid #e8d8c5;"/>
        </div>
        <div class="banner-menu">
          <button class="login">LOG IN</button>
        </div>  
      </div>
    </div>
</body>
</html>