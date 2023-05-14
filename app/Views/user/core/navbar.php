<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="<?=base_url()?>">
      <img src="<?=base_url()?>/assets/img/logo/wktk-hitam.svg" class="d-block w-50" alt="...">
    </a>
    <div class="navbar-nav d-flex">

      <a class="nav-link link-dark me-2" href="<?=base_url()?>collection">Collection</a>
      <a class="nav-link link-dark me-2" href="<?=base_url()?>lookbook">Lookbook</a>
      <a class="nav-link link-dark me-2" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopics" aria-controls="offcanvasTopics">Topics</a>
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
      <a class="nav-link link-dark me-2" href="#" data-bs-toggle="offcanvas" data-bs-target="#<?=$cart?>" aria-controls="<?=$cart?>">
        <i class="bi bi-cart-fill"></i>
      </a>
      <a class="nav-link link-dark me-2" href="#" data-bs-toggle="offcanvas" data-bs-target="#<?=$wishlist?>" aria-controls="<?=$wishlist?>">
        <i class="bi bi-heart-fill"></i>
      </a>
      <a class="nav-link link-dark me-2" href="#" data-bs-toggle="offcanvas" data-bs-target="#<?=$account?>" aria-controls="<?=$account?>">
        <i class="bi bi-person-circle"></i>
      </a>

      
      
    </div>
  </div>
</nav>


<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCartLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasCartLabel">Cart</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Try scrolling the rest of the page to see this option in action.</p>
  </div>
</div>

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWishlist" aria-labelledby="offcanvasWishlistLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWishlistLabel">Wishlist</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Wishlist</p>
  </div>
</div>

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasAccount" aria-labelledby="offcanvasAccountLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasAccountLabel">Acount</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Account</p>
  </div>
</div>

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasLogin" aria-labelledby="offcanvasLoginLabel">
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
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-dark" type="submit">Masuk</button>
    <div class="mt-3 text-center">
      <span><a href="<?=base_url()?>/Home/register" class="text-decoration-none link-dark">Daftar</a></span> <br>
      <span><a href="<?=base_url()?>/Home/register" class="text-decoration-none link-dark">Lupa Password</a></span>
    </div>
    </form>
  </div>
</div>

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasTopics" aria-labelledby="offcanvasTopicsLabel">
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

