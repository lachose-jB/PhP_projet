<?php include 'form_process.php'; ?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
    <script type="module" src="js/login.js" defer></script>
</head>

<body>
<section>
    <a href="index.html"><span class="Hspan"><img src="./img/home.png" alt="home" class="homee"></span></a> 
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>

    <main class="signin">
        <article class="content" id="login">
            <h2>Sign In</h2>
            <p style="color: rgb(153, 247, 2);">Nb: les case (*) sont obligatoire</p>
            <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <article class="inputBox">
                    <input type="text" name="username" required> <i>Username*</i>
                </article>
                <article class="inputBox">
                    <input type="password" name="password" required> <i>Password*</i>
                </article>
                <article class="links">
                    <a href="#" id="signupLink">Signup</a>
                </article>
                <article class="inputBox">
                    <input type="submit" name="login" value="Login">
                </article>
            </form>
        </article>

        <article class="content" id="Signup">
            <h2>Sign Up</h2>
            <p style="color: rgb(153, 247, 2);">Nb: les case (*) sont obligatoire</p>
            <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <article class="inputBox">
                    <input type="text" name="name" required> <i>Name*</i>
                </article>
                <article class="inputBox">
                    <input type="text" name="email" required> <i>Mail*</i>
                </article>
                <article class="inputBox">
                    <input type="text" name="username"> <i>Username</i>
                </article>
                <article class="inputBox">
                    <input type="password" name="password" required> <i>Password*</i>
                </article>
                <article class="inputBox">
                    <input type="password" name="repassword" required> <i>Re-Password*</i>
                </article>
                <article class="links">
                    <a href="#" id="loginLink">Login</a>
                </article>
                <article class="inputBox">
                    <input type="submit" name="signup" value="Signup">
                </article>
            </form>
        </article>
    </main>
</section>

<?php if (!empty($errors)) : ?>
    <div class="errors">
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

</body>
</html>
