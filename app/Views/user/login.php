<style>
/* html,
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
} */
</style>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?=base_url()?>">
                    <img src="<?=base_url()?>/assets/img/logo/wktk-hitam.svg" class="mt-3" style="width: 15%;"
                        alt="...">
                </a>
                <br>
                <p class="h4 mb-3">Step into Wakuteka Style: Explore the Fashion Frontier</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="col-md-12 mx-auto">
                        <div class="card border-0">
                            <div class="card-body">
                                <h2 class="card-title text-center mb-5">Login</h2>
                                <form method="POST" action="<?=base_url()?>action/login">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingUsername"
                                            placeholder="Username" name="username">
                                        <label for="floatingUsername">Username</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingPassword"
                                            placeholder="Password" name="password">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                    <div class="text-center">
                                        <button class="w-50 btn btn-warning text-dark mt-2 fw-bold rounded-0"
                                            type="submit">Sign
                                            in</button>
                                    </div>
                                    <div class="my-2 text-center ">
                                        <small><a href="#" class="link-dark">Lupa Password ?</a></small>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container">
                    <div class="col-md-12 mx-auto">
                        <div class="card border-0">
                            <div class="card-body">
                                <h2 class="card-title text-center mb-5">Register</h2>
                                <form method="POST" action="<?=base_url()?>action/register">
                                    <div class="form-floating mb-3">
                                        <input required type="text" class="form-control" id="username_register"
                                            placeholder="Username" name="username_register">
                                        <label class="text-secondary" for="username_register">Username</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input required type="email" class="form-control" id="Email_register"
                                            placeholder="Email" name="email_register">
                                        <label class="text-secondary" for="Email_register">Email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input required type="date" class="form-control" id="birthday_register"
                                            placeholder="birthday" name="birthday_register">
                                        <label class="text-secondary" for="birthday_register">Birthday</label>
                                    </div>
                                    <div class="mb-3">
                                        <select class="form-select form-select-lg mb-3" name="gender_register">
                                            <option selected disabled>Gender</option>
                                            <option value="1">Male</option>
                                            <option value="0">Female</option>
                                            <option value="2">Helicopter</option>
                                        </select>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input required type="text" class="form-control" id="phone_register"
                                            placeholder="phone" name="phone_register" value="+62">
                                        <label class="text-secondary" for="phone_register">Phone Number</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input required type="password" class="form-control" id="Password_register"
                                            placeholder="Password" name="password_register">
                                        <label class="text-secondary" for="Password_register">Password</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input required class="form-check-input" type="checkbox" value=""
                                            id="agreement">
                                        <label class="form-check-label" for="agreement">
                                            Setuju <a href="#">Syarat & Ketentuan</a>
                                        </label>
                                    </div>
                                    <div class="text-center mb-5">
                                        <button type="submit" class="btn btn-warning btn-block w-75 rounded-0 fw-bold"
                                            id="btn_register" disabled> New Member Registration
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- <main class="form-signin w-100 m-auto">
    <form method="POST" action="<?=base_url()?>/Action/login">
        <img class="mb-4 w-100" src="<?=base_url()?>/assets/img/Wktk1.png" alt="">
        <h1 class="h3 mb-3 fw-normal text-center">Masuk</h1>

        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
            <label for="floatingInput">Username</label>
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
            <span>Belum Punya Akun ? <a href="<?=base_url()?>/Home/register">Daftar</a></span>
        </div>
    </form>
</main> -->

<script>
$(function() {
    $('#agreement').click(function() {
        if ($(this).is(':checked'))
            $('#btn_register').removeAttr("disabled");
        else
            $('#btn_register').attr('disabled', 'disabled');
    });

});
</script>