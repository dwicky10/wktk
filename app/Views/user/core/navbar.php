<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="<?=base_url()?>">
            <img src="<?=base_url()?>/assets/img/logo/wktk-hitam.svg" class="d-block w-50" alt="...">
        </a>
        <div class="navbar-nav d-flex">

            <a class="nav-link link-dark me-2" href="<?=base_url()?>collection">Collection</a>
            <a class="nav-link link-dark me-2" href="<?=base_url()?>lookbook">Lookbook</a>
            <a class="nav-link link-dark me-2" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopics"
                aria-controls="offcanvasTopics">Topics</a>
            <?php
      
        if(empty($_SESSION['isLoggedIn'])){
          $cart     = "offcanvasLogin";
          $wishlist = "offcanvasLogin";
          $account  = "offcanvasLogin";
        }else{
          $cart     = "offcanvasCart";
          $wishlist = "offcanvasWishlist";
          $account  = "offcanvasAccount";
        } ?>
            <a class="nav-link link-dark me-2" href="#" data-bs-toggle="offcanvas" data-bs-target="#<?=$cart?>"
                aria-controls="<?=$cart?>">
                <i class="bi bi-cart-fill"></i>
            </a>
            <a class="nav-link link-dark me-2" href="#" data-bs-toggle="offcanvas" data-bs-target="#<?=$wishlist?>"
                aria-controls="<?=$wishlist?>">
                <i class="bi bi-heart-fill"></i>
            </a>
            <a class="nav-link link-dark me-2" href="#" data-bs-toggle="offcanvas" data-bs-target="#<?=$account?>"
                aria-controls="<?=$account?>">
                <i class="bi bi-person-circle"></i>
            </a>
        </div>
    </div>
</nav>


<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart"
    aria-labelledby="offcanvasCartLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCartLabel">Cart</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <?php if(empty($carts)){ ?>
        <p class="text-muted"> Empty Cart </p>
        <a class="btn btn-block" href="<?=base_url()?>collection"> Go to Collection</a>
        <?php }else{ ?>
        <form action="<?=base_url()?>home/checkout" method="POST">
            <?php foreach($carts as $keyc => $valuec){ ?>
            <div class="row">
                <div class="col-4 align-middle">
                    <img src="<?=base_url()?>assets/img/produk/<?=$valuec['image']?>" class="d-block w-100" alt="">
                </div>
                <div class="col-8">
                    <p class="mb-1"><?=$valuec['name']?></p>
                    <p class="text-muted text-sm mb-1">Size <?=$valuec['size']?> | <?=$valuec['jumlah']?> Item</p>
                    <p class="mb-1">Rp. <?=number_format($valuec['jumlah']*$valuec['price'],0,",",".") ?></p>
                    <p class="mb-1">
                        <a class=" link-danger" href="<?=base_url()?>home/remove_cart/<?=$valuec['counter']?>">
                            <i class="bi bi-trash"></i>
                        </a>
                        <!-- <div class="row">
                    <div class="col-6 p-1">
                        <select class="form-select">
                            <option> 1 </option>
                            <option> 2 </option>
                            <option> 3 </option>
                            <option> 4 </option>
                        </select>
                    </div>
                    <div class="col-6 p-1">
                        
                    </div>
                </div> -->
                    </p>
                </div>
            </div>
            <input type="hidden" name="id_product[]" value="<?=$valuec['counter_stock']?>">
            <input type="hidden" name="total[]" value="<?=$valuec['jumlah']?>">
            <hr class="m-2">
            <?php } ?>
            <button type="submit" class="btn btn-dark btn-block w-100"> Checkout </button>
        </form>
        <?php } ?>
    </div>
</div>

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWishlist"
    aria-labelledby="offcanvasWishlistLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasWishlistLabel">Wishlist</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <p>Wishlist</p>
    </div>
</div>

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasAccount"
    aria-labelledby="offcanvasAccountLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasAccountLabel">Acount</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <?php  if(!empty($_SESSION['isLoggedIn'])){ ?>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="<?=base_url()?>histori" class="nav-link link-dark h2" aria-current="page">
                    <i class="me-2 bi bi-clock-history"></i> Order History
                </a>
            </li>
            <li class="nav-item">
                <a href="<?=base_url()?>setting" class="nav-link link-dark h2" aria-current="page">
                    <i class="me-2 bi bi-sliders"></i> Settings
                </a>
            </li>
            <hr>
            <li class="nav-item">
                <a href="<?=base_url()?>Action/logout" class="nav-link link-dark h2" aria-current="page">
                    <i class="me-2 bi bi-box-arrow-right"></i> Logout
                </a>
            </li>
        </ul>
        <?php } ?>
    </div>
</div>

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasLogin"
    aria-labelledby="offcanvasLoginLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasLoginLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form method="POST" action="<?=base_url()?>/Action/login">
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                    name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-dark" type="submit">Masuk</button>
            <div class="mt-3 text-center">
                <span><a href="<?=base_url()?>/Home/register" class="text-decoration-none link-dark">Daftar</a></span>
                <br>
                <span><a href="<?=base_url()?>/Home/register" class="text-decoration-none link-dark">Lupa
                        Password</a></span>
            </div>
        </form>
    </div>
</div>

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasTopics"
    aria-labelledby="offcanvasTopicsLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasTopicsLabel">Topics</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <a href="#">WKTK Corner</a><br>
        <a href="#">FAQ</a><br>
        <a href="#">About Us</a><br>
    </div>
</div>