<?php
/**
 * Created by PhpStorm.
 * User: Nikita Pavlov
 * Date: 20.09.2017
 * Time: 14:40
 */

interface IDao
{
    public function getById($id);

    public function getAll();

    public function get($limit, $offset);

    public function add(GuestMessage $object);

    public function update($id);

    public function delete($id);
}