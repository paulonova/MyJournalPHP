<?php require_once "partials/head.php";  ?>

<?php if (isset($_GET["message"])) {?>
    <div id="login_failed" class="alert alert-danger" role="alert">
        <?php echo $_GET["message"]; ?>
    </div>

    <?php } ?>

<div class="container-fluid">
    <h1 class="inlamning_title jumbotron">Inlämningsuppgift n.1</h1>
</div>

<main class="container">

<?php if (!isset($_SESSION["loggedIn"])): ?>    

    <form class="form_signin" action='./partials/login.php' method='POST'>
        <div class="signin_form">
            <h2 class="form-signin-heading">Please sign in</h2>

            <label for="username" class="sr-only">Email address</label>
            <input type="text" name ="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id="sign_password" class="form-control" placeholder="Password" required>

            <div class="signin_btn">
                <button id="register" class="btn btn-warning" type="button">Not registered</button>
                <input class="btn btn-lg btn-primary" value="Sign in" type="submit">
            </div>
        </div>       
      </form>

    <hr>

      <form id="register_form" class="form_register hidden" action='partials/register.php' method='POST'>
        <div class="register_form">
            <h2 class="form-signin-heading">Register</h2>

            <label for="username" class="sr-only">Email address</label>
            <input type="text" name ="username" id="username" class="form-control" placeholder="Username" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id="reg_password" class="form-control" placeholder="Password" required>

            <div class="register_btn">
                <input class="btn btn-lg btn-primary" value="Register" type="submit">
            </div>
        </div>       
      </form>

    <?php else : header('Location: /journal.php'); ?>   

    <?php endif; ?>

</main>

<?php require_once "partials/footer.php"; ?>