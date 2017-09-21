<?php

/**
 * Created by PhpStorm.
 * User: Nikita Pavlov
 * Date: 20.09.2017
 * Time: 14:44
 */


class GuestMessageDaoImpl implements IDao
{
    public function getById($id)
    {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'SELECT * FROM entry WHERE id=?';
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();
        return $q->fetch();
    }

    public function getAll()
    {
        $pdo = Database::connect();
        $sql = 'SELECT * FROM entry';
        $q = $pdo->query($sql);
        Database::disconnect();
        return $q->fetchAll();
    }

    public function getNumber()
    {
        $pdo = Database::connect();
        $sql = 'SELECT COUNT(*) FROM entry';
        $q = $pdo->query($sql);
        Database::disconnect();
        return $q->fetchColumn();
    }

    public function get($limit, $offset)
    {
        $pdo = Database::connect();
        $sql = 'SELECT * FROM entry  ORDER BY date DESC LIMIT :limit OFFSET :offset';
        $q = $pdo->prepare($sql);
        $q->bindValue(':limit', $limit, PDO::PARAM_INT);
        $q->bindValue(':offset', $offset, PDO::PARAM_INT);
        $q->execute();
        Database::disconnect();
        return $q->fetchAll();
    }

    public function add(GuestMessage $object)
    {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO entry (username, email, homepage, text, ip, browser, file) values(?, ?, ?, ?, ?, ?, ?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($object->getUserName(), $object->getEmail(), $object->getHomePage(), $object->getMessage(), $object->getIp(), $object->getBrowser(), $object->getFileName()));
        Database::disconnect();
    }


    public function update($id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}