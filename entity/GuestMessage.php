<?php
/**
 * Created by PhpStorm.
 * User: Nikita Pavlov
 * Date: 20.09.2017
 * Time: 14:23
 */

class GuestMessage
{
    private $id;
    private $userName;
    private $email;
    private $homePage;
    private $message;
    private $date;
    private $ip;
    private $browser;
    private $fileName;


    private function __construct()
    {
    }

    public static function newGuestMessageFromClientWithHomePage($userName, $email, $homePage, $message, $ip, $browser)
    {
        $object = new GuestMessage();
        $object->userName = $userName;
        $object->email = $email;
        $object->homePage = $homePage;
        $object->message = $message;
        $object->ip = $ip;
        $object->browser = $browser;
        return $object;
    }

    public static function newGuestMessageFromClientNoHomePage($userName, $email, $message, $ip, $browser)
    {
        $object = new GuestMessage();
        $object->userName = $userName;
        $object->email = $email;
        $object->message = $message;
        $object->ip = $ip;
        $object->browser = $browser;
        return $object;
    }

    public static function newGuestMessageFromDB(array $row)
    {
        $object = new GuestMessage();
        $object->id = $row['id'];
        $object->userName = $row['username'];
        $object->email = $row['email'];
        $object->homePage = $row['homepage'];
        $object->message = $row['text'];
        $object->ip = $row['ip'];
        $object->browser = $row['browser'];
        $object->date = $row['date'];
        $object->fileName = $row['file'];
        return $object;
    }

    public static function newGuestMessageArrayFromDB(array $rows)
    {
        foreach ($rows as $row) {
            $object = self::newGuestMessageFromDB($row);
            $array[] = $object;
        }
        return $array;
    }

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getUserName()
    {
        return $this->userName;
    }


    public function setUserName($userName)
    {
        $this->userName = $userName;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getHomePage()
    {
        return $this->homePage;
    }


    public function setHomePage($homePage)
    {
        $this->homePage = $homePage;
    }


    public function getMessage()
    {
        return $this->message;
    }


    public function setMessage($message)
    {
        $this->message = $message;
    }


    public function getIp()
    {
        return $this->ip;
    }


    public function setIp($ip)
    {
        $this->ip = $ip;
    }


    public function getBrowser()
    {
        return $this->browser;
    }


    public function setBrowser($browser)
    {
        $this->browser = $browser;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }


    public function getFileName()
    {
        return $this->fileName;
    }


    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }


}