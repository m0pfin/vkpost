<?php
/**
 * Created by PhpStorm.
 * User: vladislavmac
 * Date: 18/03/2019
 * Time: 13:48
 */

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

spl_autoload_register(function ($class) {
    $base_dir = __DIR__;
    $file = $base_dir . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (!file_exists($file)) {
        throw new \Exception("File is not found: {$file}");
    }
    require $file;
});

require_once("vendor/autoload.php");
include 'config/db.php';

?>






<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Пример на bootstrap 4: Базовая панель администратора с фиксированной боковой панелью и навигационной панелью.">

    <title>Панель администратора | Dashboard m0pfin</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script language="JavaScript">
        $(document).ready(function() {
            $('#myTable').DataTable( {
                "order": [[ 0, "desc" ]]
            } );
        } );
    </script>


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">


</head>

<body>

<nav class="navbar navbar-dark  bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Панель администратора</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Sign out</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <span data-feather="home"></span>
                            Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            Orders
                        </a>
                    </li>
                </ul>

            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a class="btn btn-sm btn-outline-secondary" href="nowPost.php" role="button">Опубликовать</a>
                        <a class="btn btn-sm btn-outline-secondary" href="#" role="button">Обновить</a>
                    </div>
                </div>
            </div>

            <?php

            if (isset($_GET['error'])){
                echo '<div class="alert alert-danger" role="alert">Ошибка, такой пост уже есть - ID: '.$_GET['error'].'</div>';
            }
            if (isset($_GET['success'])){
                echo '<div class="alert alert-success" role="alert">Сообщение опубликовано! ID: '.$_GET['success'].'</div>';
            }

            ?>
            <h2>Список опубликованных постов</h2>
            <div class="table-responsive">
                    <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>Дата</th>
                        <th>ID поста</th>
                        <th>ID группы</th>
                        <th>Сообщение</th>
                        <th>Ссылка</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Тут будет ЦИКЛ вывода офферов с БД -->
                    <?php

                    $offers = $db->query("SELECT * FROM post ORDER BY id DESC");
                    foreach ($offers as $result) {
                        ?>
                        <tr>
                            <td><?php echo $result['date']; // Дата  ?></td>
                            <td><?php echo $result['post_id']; // ID сообшения  ?></td>
                            <td><?php echo "<a href ='https://vk.com/public".$result['owner_id']."' target='_blank'>".$result['owner_id']."</a>"; // ID группы  ?></td>
                            <td><?php echo $result['post_text']; // Сообщение ?></td>
                            <td><?php echo "<a href ='https://vk.com/".$result['post_attachments']."'>".$result['post_attachments']."</a><br>"; // Ссылка  ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</div>

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

</body>
</html>
