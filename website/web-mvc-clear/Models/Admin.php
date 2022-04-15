<?php

require_once 'BaseModel.php';

class Admin extends BaseModel
{
    //table name
    public $tName = 'admin'; 

    //columns
    public $col = ['ho_ten', 'email', 'password', 'permission'];
}


?>