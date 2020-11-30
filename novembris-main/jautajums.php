<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="icon" href="https://i.dlpng.com/static/png/4674218_preview.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MineCurse- Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/reset.css" rel="stylesheet">
    <link href = "./libs/bootstrap/css/bootstrap.css" rel ="stylesheet">
    <script src="./libs/jQuery/jquery3.4.1.min.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.js"> </script>
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/lightbox.css" rel="stylesheet"/>
    <script src="./libs/lightbox/js/lightbox.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="parmums.php">Covid Drošība</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav  navbar-right">
                <li><a href="index">Mājas</a></li>
                <li><a href="parmums">Par mums</a></li>
                <li><a href="galerija">Galerija</a></li>
                <li><a href="videogalerija">Video galerija</a></li>
                <li>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Kontakti
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="kontakti">Mūsu kontakti</a></li>
                            <li class="active"><a href="jautajums.php">Pajautāt</a></li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</nav>
<section class="container-fluid">
    <section class="row">
        <div class="col-md-2 col-sm-6 article" style="background-color:#FFFFFF">

        </div>
        <div class="col-md-8 col-sm-6 article" style="background-color:#FFFFFF">
            <h1>Uzdodiet jautājumus šeit!</h1>
            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="email">Vārds:</label>
                    <input type="text" class="form-control" id="name" placeholder="Vārds" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Uzvārds:</label>
                    <input type="text" class="form-control" id="surname" placeholder="Uzvārds" name="surname">
                </div>
                <div class="form-group">
                    <label for="email">E-pasts:</label>
                    <input type="email" class="form-control" id="email" placeholder="JusuEpasts@epasts.lv" name="email">
                </div>
                <div class="form-group">
                    <label for="email">Tālrunis:</label>
                    <input type="text" class="form-control" id="phone" placeholder="+371 " name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" <input type="password" class="form-control" placeholder="parole123" title="Ievadei jāsastāv tikai no cipariem (8)">
                </div>
                <div class="form-group">
                    <label for="email">Jautājums:</label>
                    <textarea class="form-control" rows="5" id="question"  name="question"></textarea>
                </div>
                <button type="submit" name="save" class="btn btn-success">Nosūtīt</button>
            </form>
        </div>
        <div class="col-md-2 col-sm-6 article" style="background-color:#FFFFFF">

        </div>
    </section>
</section>
<div class="footer_parak_mazs">
    <p>Kājene</p>
    <div class="footerimgbox">
        <a href="https://www.w3schools.com">
            <img alt="Instagram.com logo" height="60px" width="60px" src="https://i.pinimg.com/originals/4f/01/49/4f0149647a160a47217615866f5469c4.png">
        </a>
        <a href="https://www.rvt.lv/">
            <img alt="Rvt.lv logo" height="60px" width="60px" src=https://www.estudijas.rvt.lv/theme/image.php/clean/theme/1505375536/rvt-95">
        </a>
        <a href="https://www.facebook.com">
            <img alt="Facebook.com logo" height="60px" width="60px" src="https://www.freepnglogos.com/uploads/facebook-icons/facebook-icon-transparent-background-3.png">
        </a>
        <a href="https://www.twitter.com">
            <img alt="Twitter.com logo" height="60px" width="60px" src="https://aer.eu/wp-content/uploads/2017/06/twitter-logo-4.png">
        </a>
        <a href="https://w3schools.com">
            <img alt="W3schools.com logo" height="60px" width="60px" src="https://www.w3schools.com/tags/logo_w3s.gif">
        </a>
    </div>
    <a href="">
        <p>Copyright©-MineCurse-2019.12.x</p>
        <p>Simbolisks teksts lai izskatītos pēc īstās dzīves piemēra. Man nepieder mājaslapā ievietotie attēli un video. </p>
    </a>
</div>
<?php
    if(isset($_POST['save'])){
        echo "<b>Jūsu vārds: </b>{$_POST['name']}<br/>";
        echo "<b>Jūsu uzvārds: </b>{$_POST['surname']}<br/>";
        echo "<b>Jūsu epasts: </b>{$_POST['email']}<br/>";
        echo "<b>Jūsu parole: </b>{$_POST['password']}<br/>";
    }
?>
</body>
</html>
