<?php
/**
 * Created by PhpStorm.
 * User: Nikita Pavlov
 * Date: 21.09.2017
 * Time: 15:42
 */

$file = basename($_GET['file']);
$file = $file.'.txt';

if(!$file){
    die('file not found');
} else {
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$file");
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: binary");

    // read the file from disk
    readfile('./files/'.$file);
}