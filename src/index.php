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
                    <p style="color: rgb(153, 247, 2);">Note: les champs (*) sont obligatoires</p>
                    <form class="form" method="post" action="./control/form.php">
                        <article class="inputBox">
                            <input type="text" name="username" required="true"> <i>Username*</i>
                        </article>
                        <article class="inputBox">
                            <input type="password" name="password" required="true"> <i>Password*</i>
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
                    <p style="color: rgb(153, 247, 2);">Note: les champs (*) sont obligatoires</p>
                    <form class="form" method="post" action="./control/form.php">
                        <article class="inputBox">
                            <input type="text" name="name" required="true"> <i>Name*</i>
                        </article>
                        <article class="inputBox">
                            <input type="text" name="email" required="true"> <i>Mail*</i>
                        </article>
                        <article class="inputBox">
                            <input type="text" name="username"> <i>Username</i>
                        </article>
                        <article class="inputBox">
                            <input type="date" name="dateNais"> <i>Date de naissance</i>
                        </article>
                        <article class="inputBox">
                            <input type="password" name="password" required="true"> <i>Password*</i>
                        </article>
                        <article class="inputBox">
                            <input type="password" name="repassword" required="true"> <i>Re-Password*</i>
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
    </body>
</html>
