<?php
/**
 * Created by PhpStorm.
 * User: Nikita Pavlov
 * Date: 20.09.2017
 * Time: 13:26
 */

require "./entity/GuestMessage.php";
require "./database/dao/IDao.php";
require "./database/dao/GuestMessageDaoImpl.php";
require "./database/database.php";

require_once "captchalib.php";

$secret = "6Le1azEUAAAAAPMQC2AZWxOG0l9W-DrjNwFS_oAW";
$response = null;
$reCaptcha = new ReCaptcha($secret);

if (!empty($_POST)) {

    if ($_POST["g-recaptcha-response"]) {
        $response = $reCaptcha->verifyResponse(
            $_SERVER["REMOTE_ADDR"],
            $_POST["g-recaptcha-response"]
        );
    }

    if ($response != null && $response->success) {

        $userName = $_POST['username'];
        if (!preg_match('/[^A-Za-z0-9]/', $userName)){
            $email = $_POST['email'];

            $message = strip_tags($_POST['text']);
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $userIp = $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $userIp = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                $userIp = $_SERVER['REMOTE_ADDR'];
            }

            $userBrowser = $_SERVER['HTTP_USER_AGENT'];
            $guest = null;
            if (isset($_POST['homepage'])) {
                $homepage = $_POST['homepage'];
                $guest = GuestMessage::newGuestMessageFromClientWithHomePage($userName, $email, $homepage, $message, $userIp, $userBrowser);
            } else {
                $homepage = null;
                $guest = GuestMessage::newGuestMessageFromClientNoHomePage($userName, $email, $message, $userIp, $userBrowser);
            }
            if (!empty($_FILES)) {
                if ($_FILES['file']['type'] == 'text/plain') {
                    $fName = uniqid();
                    $guest->setFileName($fName);
                    move_uploaded_file($_FILES["file"]["tmp_name"],'./files/'.$fName.'.txt');
                }
            }
            $guestMessageDao = new GuestMessageDaoImpl();
            $guestMessageDao->add($guest);
            header("Refresh:0; url=index.php");
        }else{
            echo 'Only english characters allowed!';
        }

    } else {
        echo "Bad captcha!!!";
    }

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
        <div class="col-md-4 col-md-offset-4">
            <form enctype="multipart/form-data" action="create.php" method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="homepage">Homepage:</label>
                    <input type="url" class="form-control" id="homepage" name="homepage">
                </div>

                <div class="form-group">
                    <label for="text">Text:</label>
                    <textarea class="form-control" rows="3" id="text" name="text" required></textarea>
                </div>

                <div class="form-group">
                    <input type="hidden" name="MAX_FILE_SIZE" value="100000"/>
                    <!-- Название элемента input определяет имя в массиве $_FILES -->
                    Upload file: <input name="file" type="file"/>
                </div>

                <div class="g-recaptcha col-md-12" data-sitekey="6Le1azEUAAAAAEo0-gvtjtyq_kAIgMgS_-xJtLQr"></div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success col-md-6">Submit</button>
                    <a href="index.php" class="btn btn-info col-md-6">Back</a>
                </div>

            </form>
            <script src='https://www.google.com/recaptcha/api.js'></script>
        </div>
    </div>
</div>

</body>
</html>


