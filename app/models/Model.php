<?php

namespace app\models;

use app\models\Connection;

class Model
{

    protected $connect;

    public function __construct()
    {
        $this->connect = Connection::connect();
    }

    public function all()
    {

        $sql = "SELECT * FROM {$this->table}";
        $all = $this->connect->prepare($sql);
        $all->execute();
        return $all->fetchAll();
    }
}
