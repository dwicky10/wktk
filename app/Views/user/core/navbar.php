<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">wakuteaw</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
        <li class="nav-item">
          <a class="nav-link link-dark" aria-current="page" href="<?=base_url()?>collection">Collection</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link link-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url()?>collection/baju">Tops</a></li>
            <li><a class="dropdown-item" href="<?=base_url()?>collection/asd">Bottoms</a></li>
            <li><a class="dropdown-item" href="<?=base_url()?>collection/baju">Outer</a></li>
            <li><a class="dropdown-item" href="<?=base_url()?>collection/totebag">Accessories</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark" href="#">Lookbook</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark" href="#">News</a>
        </li>
      </ul>
      <a href="#" class="link-dark" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
        aria-controls="offcanvasRight">
        <i class="bi bi-cart"></i>
      </a>

      <?php if(empty($_SESSION['isLoggedIn'])){ ?>
      <a href="<?=base_url()?>Home/login" class="btn btn-sm btn-outline-warning mx-2">
        Login
      </a>
      <?php
        }else{ 
          echo $_SESSION['name'];
        ?>
      <a href="<?=base_url()?>Admin"><i class="bi bi-person-circle"></i></a>
      <?php } ?>
    </div>
  </div>
</nav>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Cart</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    ...
  </div>
</div>