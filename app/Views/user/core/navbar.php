<nav class="navbar navbar-expand-lg bg-body-tertiary ">
  <div class="container">
    <a class="navbar-brand  " href="landingpage">Wakuteka</a>
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active " aria-current="page" href="<?=base_url()?>Home/produk">Collection</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Category
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">T-Shirt</a></li>
          <li><a class="dropdown-item" href="#">Outer</a></li>
          <li><a class="dropdown-item" href="#">Totebag</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link active " aria-current="page" href="<?=base_url()?>dda">News</a>
      </li>
    </ul>
    <ul class="nav justify-content-end">
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      </form>
      <li class="nav-item">
        <a class="nav-link active " aria-current="page" href="<?=base_url()?>Home/keranjang"><i
            class="bi bi-cart"></i></a>
      </li>
      <li>
        <?php if(empty($_SESSION['isLoggedIn'])){ ?>
        <a href="<?=base_url()?>Home/login" role="button"><i class="bi bi-person-circle "></i></a>
        <?php
        }else{ 
          echo $_SESSION['name'];
        ?>
        <a href="<?=base_url()?>Admin"><i class="bi bi-person-circle"></i></a>
        <?php } ?>
      </li>
    </ul>
  </div>
</nav>