<?php
include '../controller/auth.php';
$ctrl = new auth();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section class="forms-section">
        <h1 class="section-title">Form Login</h1>
        <div class="forms">
            <div class="form-wrapper is-active">
                <button type="button" class="switcher switcher-login">
              Login
              <span class="underline"></span>
            </button>
                <form action="<?php echo $ctrl->login() ?>" method="post" class="form form-login">
                    <fieldset>
                        <legend>Please, enter your email and password for login.</legend>
                        <div class="input-block">
                            <label for="login-email">User</label>
                            <input id="user" name="user" type="text" required>
                        </div>
                        <div class="input-block">
                            <label for="login-password">Password</label>
                            <input id="pass" name="pass" type="pass" required> 
                        </div>
                        <div class="form-group">
                            <img src="captcha.php" alt="gambar" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="kode" value="" placeholder="kode captcha" maxlength="5"/>
                        </div>

                    </fieldset>
                    <button type="submit" name="login" class="btn-login">Login</button>
                </form>
            </div>
            <div class="form-wrapper">
                <button type="button" class="switcher switcher-signup">
              Sign Up
              <span class="underline"></span>
            </button>
                <form class="form form-signup">
                    <fieldset>
                        <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                        <div class="input-block">
                            <label for="signup-email">user</label>
                            <input  name="user" id="user" type="text" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-password">Password</label>
                            <input id="pass" type="pass" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-password-confirm">Confirm password</label>
                            <input id="signup-password-confirm" type="password" required>
                        </div>

                    </fieldset>
                    <button name="username" type="submit" class="btn-signup">Continue</button>
                </form>
            </div>
        </div>
    </section>
</body>
<script src="reg.js"></script>

</html>