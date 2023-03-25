<nav class="navbar navbar-expand-lg bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand text-light " href="landingpage">Wakuteka</a>
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link active text-light" aria-current="page" href="<?=base_url()?>Home/produk">Produk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active text-light" aria-current="page" href="<?=base_url()?>Home/keranjang">Keranjang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active text-light" aria-current="page" href="<?=base_url()?>Home/custom">Custom</a>
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