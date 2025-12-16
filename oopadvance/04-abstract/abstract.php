<?php

abstract class Database {
    abstract public function connection();
    public function disconnect() {
        return "Disconnected from database." . PHP_EOL;
    }   
}

class Model extends Database {
    public function connection() {
        return "Connected to database." . PHP_EOL;
    }
}

$model = new Model();
echo $model->connection();