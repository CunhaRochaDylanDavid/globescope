<?php
/**
 * Globoscope - pageEditer.php
 *
 * Initial version by: Esteban.GIORGIS
 * Initial version created on: 13.02.2020 14:07
 */
?>
    <html>
    <head>
        <link rel="stylesheet" href="view/css/bootstrap.min.css">
        <style>
            body {
                background-image: url("view/images/MilkyWay.jpg");
            }

            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
                color: white;
                text-align: center;
            }

            td {
                border: 1px solid #dddddd;
                height: 40px;
                font-size: 16px;
            }

            th {
                border: 3px solid #dddddd;
                height: 40px;
                font-size: 20px;
            }
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
    <!-- tout le tableau-->
    <div class="container-fluid align-middle">
        <div class="row align-middle">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 text-center align-middle">
                <table class="text-center">
                    <tr style="border: black solid 2px">
                        <th>ID</th>
                        <th>Pseudo</th>
                        <th>Droit</th>
                        <th>Slogan</th>
                    </tr>
                    <tr>
                        <form action="index.php?action=pageEditer" method="POST">
                            <td><?= $_GET['id']; ?></td>
                            <td><input class="form-control form-control-sm" value="<?= $_GET['pseudo']; ?>"></td>
                            <td><input class="form-control form-control-sm" value="<?= $_GET['droit']; ?>"></td>
                            <td><input class="form-control form-control-sm" value="<?= $_GET['slogan']; ?>"></td>
                        </form>
                    </tr>
                </table>
                <div class="text-right" style="margin-top: 10px">
                    <input type="submit" value="Enregistrer" class="btn btn-secondary">
                    <a href="index.php?action=edit" class="btn btn-secondary">Annuler</a>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
    </body>
    </html>
<?php


