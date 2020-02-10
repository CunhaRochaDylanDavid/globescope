<?php
/**
 * Created by PhpStorm.
 * User: Dylan-David.CUNHA-RO
 * Date: 06.02.2020
 * Time: 14:45
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Globescope - Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            background-image: url("view/images/MilkyWay.jpg");
        }

        #logoLogin {
            margin-top: 0px;
            background: url("../../Documentation/Images/logoCpnvContour.png") no-repeat center;
            height: 250px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
        }

        #LoginContent {
            border: solid white 2px;
            height: 330px;
            background-color: transparent;
        }

    </style>
</head>
<body>
<div class="container" id="logoLogin"></div>
<h1 class="text-center" style="color: white">Mode administrateur</h1>
<?php
// si error égal true alors une erreur sera affichée
if (isset($_GET['error']) && $_GET['error'] == true) {
    echo '<h5 class="text-center" style="color: red;">Login incorrect</h5>';
}
?>
<div class="container" id="LoginContent"><br>
    <form class="form" method="post" action="index.php?action=checkLogin">
        <div class="form-group">
            <label for="Email" style="color: white">Adresse Email</label>
            <input type="text" class="form-control" id="Email" name="email" aria-describedby="emailHelp" placeholder="Entrez votre Email" required>
        </div>
        <br>
        <div class="form-group">
            <label for="Password" style="color: white">Mot de passe</label>
            <input type="password" class="form-control" id="Password" name="password" placeholder="mot de passe" required>
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary">Connexion</button>
    </form>
</div>
</body>
</html>

