<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="Florian Ficek" />
    <meta name="copyright" content="Copyright owner" />
    <meta name="robots" content="index, follow" />
    <title>Football Scout System</title>
    <link rel="stylesheet" href="./sass/basic.css">
    <link rel="stylesheet" href="./sass/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
</head>

<body>
    <div class="header">
        <h1>Football Scout System</h1>
        <h3>Complet system for every football scout.</h3>
    </div>

    <div class="sidebar">
        <div class="splide splide_index">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide"><img src="./gfx/1.jpg" alt="example1"></li>
                    <li class="splide__slide"><img src="./gfx/2.jpg" alt="example2"></li>
                    <li class="splide__slide"><img src="./gfx/3.jpg" alt="example3"></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="account">
        <div class="login box">
            <form action="./php/login.php" method="post">
                <label>Login: <input type="text" name="login" id="login"></label>
                <label>Password: <input type="password" name="passowrd" id="password"></label>
                <input type="submit" value="Log in">
            </form>
        </div>

        <div class="register box">
            <form action="./php/register.php" method="post">
                <label>Name: <input type="text" name="name" id="name"></label>
                <label>Login: <input type="text" name="reglogin" id="reglogin"></label>
                <label>Password: <input type="password" name="regpassword" id="regpassword"></label>
                <label>Confirm password: <input type="password" name="regpassword2" id="regpassword2"></label>
                <label>Country: <input type="text" name="country" id="country"></label>
                <input type="submit" value="Register">
            </form>
        </div>
    </div>

    <div class="container">
        <div class="box">
            <div class="title">Easy to use</div>
            <div class="info">Every scout can easliy use our system. You can write review about every played match which
                has benn played for 2017. Interface is created for every user. Easy to use and easy to find everything.
                You can use searchbars to find players or matches.</div>
        </div>
        <div class="box">
            <div class="title">Big database</div>
            <div class="info">In our databes you can search into about 25 thousands of players and about 30 leageus from
                europe including Champions League or Europe League. </div>
        </div>
        <div class="box">
            <div class="title">A lot of informations</div>
            <div class="info">In our system you can check a lot of informations abouot players. Goals, asissts, minutes
                played or cards. Also you can check every single match of a player.</div>
        </div>
    </div>

    <div class="footer">
        Florian Ficek &copy; 2022-2023
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="./scripts/slide.js"></script>
</body>

</html>