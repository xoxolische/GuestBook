<?php
/**
 * Created by PhpStorm.
 * User: Nikita Pavlov
 * Date: 20.09.2017
 * Time: 13:26
 */
include 'database/database.php';
include 'entity/GuestMessage.php';
include 'database/dao/IDao.php';
include 'database/dao/GuestMessageDaoImpl.php';

$limit = 25;

if(!empty($_GET)){
    $o = new GuestMessageDaoImpl();
    $total = $o->getNumber();
    $lastPage = floor($total / $limit);
    if(($total % $limit) != 0){
        $lastPage = $lastPage + 1;
    }
    if(($_GET['page'] >= 1) && ($_GET['page'] <= $lastPage)){
        $current = $_GET['page'];
        if($current > 1){
            $previous = $current - 1;
        }else{
            $previous = null;
        }
        if($current < $total){
            $next = $current+1;
        }else{
            $next = null;
        }
        $offset = ($current-1) * $limit;
    }else{
        header("Refresh:0; url=index.php");
    }

}else{
    $current = 1;
    $o = new GuestMessageDaoImpl();
    $total = $o->getNumber();
    if(($current + 1) <= $total){
        $next = $current + 1;
    }else{
        $next = null;
    }
    $previous = null;
    $offset = 0 * $limit;
    $lastPage = $total / $limit;
}

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <script
        src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
    <link href="libs/css/bootstrap.min.css" rel="stylesheet">
    <link href="libs/css/bootstrap.css" rel="stylesheet">
    <link href="libs/css/bootstrap-theme.css" rel="stylesheet">
    <script src="libs/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <p>
            <h3>Guest Book.</h3>
            </p>
            <p>
                <a href="create.php" class="btn btn-success">Leave a message</a>
            </p>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Author</th>
                <th>Email</th>
                <th>HomePage</th>
                <th>Creation Date</th>
                <th>Text</th>
                <th>IP</th>
                <th>Browser</th>
            </tr>
            </thead>
            <tbody>
            <?php

            $guestMessageDao = new GuestMessageDaoImpl();
            $rows = $guestMessageDao->get($limit, $offset);
            $m = GuestMessage::newGuestMessageArrayFromDB($rows);
            foreach($rows as $row){
                $obj = GuestMessage::newGuestMessageFromDB($row);
                echo '<tr>';
                echo '<td>'. $obj->getId() . '</td>';
                echo '<td>'. $obj->getUserName() . '</td>';
                echo '<td>'. $obj->getEmail() . '</td>';
                echo '<td>'. $obj->getHomePage() . '</td>';
                echo '<td>'. $obj->getDate() . '</td>';
                echo '<td>'. $obj->getMessage() . '</td>';
                echo '<td>'. $obj->getIp() . '</td>';
                echo '<td>'. $obj->getBrowser() . '</td>';
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
        <nav aria-label="...">
            <ul class="pagination">
                <?php if($current == null || $current <= 1){ ?>
                <li class="page-item disabled">
                    <a class="btn disabled" href="index.php?page=<?php echo $previous?>" tabindex="-1">Previous</a>
                    <?php }else{ ?>
                <li class="page-item">
                    <a class="btn" href="index.php?page=<?php echo $previous?>" tabindex="-1">Previous</a>
                    <?php } ?>
                </li>

                <?php if($current == null || $current <= 1){ ?>

                <?php }else{ ?>
                <li class="btn"><a class="page-link" href="index.php?page=<?php echo $previous?>"><?php echo $previous?></a></li>
                <?php } ?>

                <li class="page-item active">
                    <a class="btn" href="index.php?page=<?php echo $current?>"><?php echo $current?> <span class="sr-only"></span></a>
                </li>


                <?php if($current == null || $current >= $lastPage){ ?>

                <?php }else{ ?>
                    <li class="btn"><a class="page-link" href="index.php?page=<?php echo $next?>"><?php echo $next?></a></li>
                <?php } ?>

                <?php if($current == null || $current >= $lastPage){ ?>
                <li class="page-item disabled">
                    <a class="btn disabled" href="index.php?page=<?php echo $next?>">Next</a>
                    <?php }else{ ?>
                <li class="page-item">
                    <a class="btn" href="index.php?page=<?php echo $next?>">Next</a>
                    <?php } ?>
                </li>
            </ul>
        </nav>
    </div>
</div>
</body>
</html>


