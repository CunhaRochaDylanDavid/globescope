<?php
/**
 * globescope - pageModif.php
 *
 * Initial version by: Esteban.GIORGIS
 * Initial version created on: 06.02.2020 13:47
 */
?>
    <!-- ce formulaire sert a entrer les changements -->
    <html>
<head>
    <title>Globescope - Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="view/css/styleSideBar.css">
    <style>
        body {
            background-image: url("view/images/MilkyWay.jpg");
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
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
</head>
<body>
<div class="row">
    <div class="col-md-2 wrapper d-flex align-items-stretch">
        <nav id="sidebar" class="active">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only" style="color: white">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4">
                <h1><a href="index.html" class="logo">Filtre</a></h1>
                <form method="post" action="index.php?action=edit">
                    <ul class="list-unstyled components mb-5">
                        <li>
                            <div class="form-group d-flex">
                                <input type="text" class="form-control" placeholder="Pseudo">
                            </div>
                        </li>
                        <li>
                            <div class="form-group d-flex">
                                <input type="text" class="form-control" placeholder="Pseudo">
                            </div>
                        </li>
                        <li>
                            <div class="form-group d-flex">
                                <input type="text" class="form-control" placeholder="Pseudo">
                            </div>
                        </li>
                        <li>
                            <div class="form-group d-flex">
                                <input type="text" class="form-control" placeholder="Pseudo">
                            </div>
                        </li>
                        <li>
                            <div class="form-group d-flex">
                                <input type="text" class="form-control" placeholder="Pseudo">
                            </div>
                        </li>
                        <li class="text-center">
                            <input type="submit" class="btn-primary" value="Rechercher">
                        </li>
                    </ul>
                </form>
            </div>
        </nav>
    </div>
    <div class="col-md-8 text-center">
        <table style="color: white" class="text-center">
            <tr>
                <th>ID</th>
                <th>Pseudo</th>
                <th>Droit</th>
                <th>Slogan</th>
            </tr>
            <?php
            foreach ($_GET['data'] as $userData) {
                foreach ($userData as $value) {
                    echo '<tr>' . '<td>' . $value->IDPlace . '</td>', '<td>' . $value->Pseudo . '</td>',
                        '<td>' . $value->Droit . '</td>', '<td>' . $value->Slogan . '</td>' . '</tr>';
                }
            }
            ?>
        </table>
    </div>
    <div class="col-md-2">
        <table>
            <tr>
                <th style="border: 0px"></th>
            </tr>
            <?php
            foreach ($_GET['data'] as $userData) {
                foreach ($userData as $value) {
                    echo '<tr>' . '<td style="border: none">' . '<a href="index.php?action=editPage&code=' . $value->IDPlace . '" class="btn btn-secondary btn-sm">Modifier</a>' . '</td>' . '</tr>';
                }
            }
            ?>
        </table>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
<?php