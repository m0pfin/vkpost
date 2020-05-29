<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Cubic Admin Template</title>
    <!-- ===== Bootstrap CSS ===== -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Plugin CSS ===== -->
    <!-- ===== Animation CSS ===== -->
    <link href="assets/css/animate.css" rel="stylesheet">
    <!-- ===== Custom CSS ===== -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- ===== Color CSS ===== -->
    <link href="assets/css/colors/green-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- DATA TABLES -->
    <link href="plugins/components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES END -->
</head>


<body class="mini-sidebar">
<!-- Preloader-->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
    <!-- ===== Top-Navigation ===== -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <a class="navbar-toggle font-20 hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </a>
            <div class="top-left-part">
                <a class="logo" href="index.html">
                    <b>
                        <img src="plugins/images/logo.png" alt="home" />
                    </b>
                    <span>
                            <img src="plugins/images/logo-text.png" alt="homepage" class="dark-logo" />
                        </span>
                </a>
            </div>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li>
                    <a href="javascript:void(0)" class="sidebartoggler font-20 waves-effect waves-light"><i class="icon-arrow-left-circle"></i></a>
                </li>
                <li>
                    <form role="search" class="app-search hidden-xs">
                        <i class="icon-magnifier"></i>
                        <input type="text" placeholder="Search..." class="form-control">
                    </form>
                </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li class="dropdown">
                    <a class="dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown" href="javascript:void(0);">
                        <i class="icon-speech"></i>
                        <span class="badge badge-xs badge-danger">6</span>
                    </a>
                    <ul class="dropdown-menu mailbox animated bounceInDown">
                        <li>
                            <div class="drop-title">You have 4 new messages</div>
                        </li>
                        <li>
                            <div class="message-center">
                                <a href="javascript:void(0);">
                                    <div class="user-img">
                                        <img src="plugins/images/users/1.jpg" alt="user" class="img-circle">
                                        <span class="profile-status online pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:30 AM</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);">
                                    <div class="user-img">
                                        <img src="plugins/images/users/2.jpg" alt="user" class="img-circle">
                                        <span class="profile-status busy pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Sonu Nigam</h5>
                                        <span class="mail-desc">I've sung a song! See you at</span>
                                        <span class="time">9:10 AM</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);">
                                    <div class="user-img">
                                        <img src="plugins/images/users/3.jpg" alt="user" class="img-circle"><span class="profile-status away pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Arijit Sinh</h5>
                                        <span class="mail-desc">I am a singer!</span>
                                        <span class="time">9:08 AM</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);">
                                    <div class="user-img">
                                        <img src="plugins/images/users/4.jpg" alt="user" class="img-circle">
                                        <span class="profile-status offline pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class="text-center" href="javascript:void(0);">
                                <strong>See all notifications</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown" href="javascript:void(0);">
                        <i class="icon-calender"></i>
                        <span class="badge badge-xs badge-danger">3</span>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                        <li>
                            <a href="javascript:void(0);">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:void(0);">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:void(0);">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:void(0);">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="javascript:void(0);">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="right-side-toggle">
                    <a class="right-side-toggler waves-effect waves-light b-r-0 font-20" href="javascript:void(0)">
                        <i class="icon-settings"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- ===== Top-Navigation-End ===== -->
<?php



include "config/db.php";
include "assets/menu.php";

//// Определяем  количество ЗАПУЩЕННЫХ офферов
//$complete = $db->countWhere( 'post',  'id', '1');

// Определяем  количество ВСЕГО добавленных постов
$summ = $db->countAll( 'post',  'id');

?>


        <!-- Page Content -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->

<!-- Карточки  -->
                <div class="row m-0">
                    <div class="col-md-3 col-sm-6 info-box">
                        <div class="media">
                            <div class="media-left">
                                <span class="icoleaf bg-primary text-white"><i class="mdi mdi-checkbox-marked-circle-outline"></i></span>
                            </div>
                            <div class="media-body">
                                <h3 class="info-count text-blue"><?php echo $summ; ?></h3>
                                <p class="info-text font-12">Опубликованные посты</p>
                                <span class="hr-line"></span>
                                <p class="info-ot font-15">Target<span class="label label-rounded label-success">300</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 info-box">
                        <div class="media">
                            <div class="media-left">
                                <span class="icoleaf bg-primary text-white"><i class="mdi mdi-comment-text-outline"></i></span>
                            </div>
                            <div class="media-body">
                                <h3 class="info-count text-blue">68</h3>
                                <p class="info-text font-12">Complaints</p>
                                <span class="hr-line"></span>
                                <p class="info-ot font-15">Total Pending<span class="label label-rounded label-danger">154</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 info-box">
                        <div class="media">
                            <div class="media-left">
                                <span class="icoleaf bg-primary text-white"><i class="mdi mdi-coin"></i></span>
                            </div>
                            <div class="media-body">
                                <h3 class="info-count text-blue">$9475</h3>
                                <p class="info-text font-12">Earning</p>
                                <span class="hr-line"></span>
                                <p class="info-ot font-15">March : <span class="text-blue font-semibold">$514578</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 info-box b-r-0">
                        <div class="media">
                            <div class="media-left p-r-5">
                                <div id="earning" class="e" data-percent="60">
                                    <div id="pending" class="p" data-percent="55"></div>
                                    <div id="booking" class="b" data-percent="50"></div>
                                </div>
                            </div>
                            <div class="media-body">
                                <h2 class="text-blue font-22 m-t-0">Report</h2>
                                <ul class="p-0 m-b-20">
                                    <li><i class="fa fa-circle m-r-5 text-primary"></i>60% Earnings</li>
                                    <li><i class="fa fa-circle m-r-5 text-primary"></i>55% Pending</li>
                                    <li><i class="fa fa-circle m-r-5 text-info"></i>50% Bookings</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Карточки  КОНЕЦ-->

                <!-- ТАБЛИЦА  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box user-table">

                            <div class="table-responsive">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Дата</th>
                                        <th>Пост</th>
                                        <th>Документ</th>
                                        <th>Группа</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- Тут будет ЦИКЛ вывода офферов с БД -->
                                    <?php

                                    //$index = 0;
                                    $post = $db->query("SELECT * FROM post ORDER BY id DESC");
                                    foreach ($post as $result) {
                                    //$index++;
                                    ?>
                                     <tr>
                                        <td><a href="#" class="text-link"><?php echo $result['date']; ?></a></td>
                                        <td><?php echo "[".$result['post_id']."] ".$result['post_text']; ?></td>
                                        <td><?php echo "<a href=https://vk.com/".$result['post_attachments'].">".$result['post_attachments']."</a>"; ?></td>
                                        <td><span class="label label-success"><?php echo $result['owner_id']; ?></span></td>
                                         <td><button type="button" class="btn-xs btn-info btn-circle"><i class="fa fa-check"></i> </button> <button type="button" class="btn-xs btn-warning btn-circle"><i class="fa fa-times"></i> </button></td>
                                     </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- ТАБЛИЦА КОНЕЦ -->
            </div>
                <!-- /.row -->


                <?php
                include "assets/foot.php";
                ?>
</body>

</html>
