<header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light ">
              <a class="navbar-brand" href="#">GLAMIFY</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto menu-list">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">WOMEN</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">MEN</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">SHOES</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">ACCESSORIES</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">LAST CHANCE</a>
                  </li>
                </ul>
              </div>
          
              <div>
              <ul class="navbar-nav mr-auto icon-tool">
                  <li class="nav-item active">
                    <button style="background-color: white; border: none;" type="button"  data-bs-toggle="modal" data-bs-target="#search">
                      <a class="nav-link" href="#">
                        <img src="{{ asset('/image/image/icon/Search.svg') }}">
                      </a>
                    </button>                    
                  </li>
                  <li class="nav-item active">
                    <button style="background-color: white; border: none;" type="button"  data-bs-toggle="modal" data-bs-target="#account">
                      <a class="nav-link" href="#">
                        <img src="{{ asset('/image/image/icon/User.svg') }}">
                      </a>
                    </button>
                  </li>
                  <li class="nav-item active">
                    <button style="background-color: white; border: none;">
                      <a class="nav-link" href="#">
                        <img src="{{ asset('/image/image/icon/Heart.svg') }}">
                      </a>
                    </button>
                  </li>
                  <li class="nav-item active">
                    <button style="background-color: white; border: none;">
                      <a class="nav-link" href="#">
                        <img src="{{ asset('/image/image/icon/Cart.svg') }}">
                      </a>
                    </button>
                  </li>                            
                </ul>
              </div>
            </nav>
          </div>
    </header>

    <div class="modal fade" id="search" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content" style="background-color: transparent;">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel" style="color: white;">Search products</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="">
                    <input type="text" name="" id="" placeholder="What are you looking for?" style="border-radius: 5px;border: 0px solid white; outline: none;width: 100%;height: 40px;display: flex;justify-content: center;color: black;">
                  </form>
                </div>
                <div class="modal-footer" style="justify-content: center">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" style="width: 150px;color: white;" >Close</button>
                  <button type="button" class="btn btn-outline-secondary" style="width: 150px;color: white;">Search</button>
                </div>
              </div>
            </div>         
    </div>
    <div class="modal fade" id="account" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Account Information</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" >
                  <div class="text-center" style="margin-bottom: 20px;">
                    <p style="margin-left: 20px; margin-right: 20px; overflow-wrap: break-word;">
                    Sắc dục là xiềng xích của đời người. Nữ sắc suy cho cùng cũng chỉ là da thịt, là máu mủ tanh hôi, là cái bẫy luân hồi vô lượng kiếp.
                  </p>
                  </div>
                  <div style="display: flex; justify-content: center; gap: 0 10px;">
                    <button type="button" class="btn btn-outline-secondary" style="width: 150px;">Sign-in</button>
                    <button type="button" class="btn btn-outline-secondary" style="width: 150px;">Log-in</button>
                  </div>                                    
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Log-out</button>            
                </div>
              </div>
            </div>         
    </div>