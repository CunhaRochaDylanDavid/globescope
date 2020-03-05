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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
                </button>
            </div>
            <div class="p-4">
                <h1 style="color: white">Filtre</h1>
                <form method="post" action="index.php?action=dataTable">
                    <ul class="list-unstyled components mb-5">
                        <li>
                            <label><b>Pseudo</b></label>
                            <div class="form-group d-flex">
                                <input type="text" name="pseudo" class="form-control" placeholder="Pseudo">
                            </div>
                        </li>
                        <li>
                            <label><b>Droit</b></label>
                            <div class="form-group d-flex">
                                <input type="text" name="droit" class="form-control" placeholder="Droit">
                            </div>
                        </li>
                        <li>
                            <label><b>Slogan</b></label>
                            <div class="form-group d-flex">
                                <input type="text" name="slogan" class="form-control" placeholder="Slogan">
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
                    echo '<tr>' . '<td style="border: none">' . '<a href="index.php?action=pageEditer&id=' . $value->IDPlace . '&pseudo=' . $value->Pseudo .'&droit=' . $value->Droit .'&slogan=' . $value->Slogan .'" class="btn btn-secondary btn-sm">Modifier</a>' . '</td>' . '</tr>';
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