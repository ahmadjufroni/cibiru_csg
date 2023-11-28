<?php

class Database extends PDO {

    public function __Construct()
    {
        parent::__Construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
    }
}