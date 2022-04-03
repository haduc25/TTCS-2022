<?php

require_once 'BaseModel.php';

class Products extends BaseModel
{
    //table name
    public $tName = 'products'; 

    //columns
    public $col = ['id_sp, id_dm, ten_sp, sub_ten_sp, img_sp, sl_sp'];
}


?>