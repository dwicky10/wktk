<style>
  html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

<main class="form-signin w-100 m-auto">
  <form method="POST" action="<?=base_url()?>/Action/login">
    <img class="mb-4 w-100" src="<?=base_url()?>/assets/img/Wktk1.png" alt="">
    <h1 class="h3 mb-3 fw-normal text-center">Daftar</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="name" name="name">
      <label for="floatingInput">Nama</label>
    </div>
    <div class="form-floating">
      <input type="int" class="form-control" id="floatingPassword" placeholder="No.Handphone" name="handphone">
      <label for="floatingInput">No. Handphone</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingPassword" placeholder="Email" name="email">
      <label for="floatingInput">E-mail</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="Address" name="address">
      <label for="floatingInput">Alamat</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="my-2 text-end ">
              <span><a href="login">Lupa Password ?</a></span>
            </div>
    <button class="w-100 btn btn-lg btn-warning" type="submit">Sign in</button>
    <div class="mt-3 text-center">
              <span>Sudah Memiliki Akun ? <a href="<?=base_url()?>/Home/login">Masuk</a></span>
            </div>
  </form>
</main>