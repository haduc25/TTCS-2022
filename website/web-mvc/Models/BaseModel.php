<?php 

class BaseModel
{
    public $conn;
    public function __construct()
    {
        $this-> conn = new PDO("mysql:host=localhost; dbname=web_gtsp; charset=utf8",'root', '');
    }


    //select all
    public static function all()
    {
        $model = new static();
        // $sql = "select * from $model->tableName";
        $sql = "select * from $model->tName"; //tName: table name
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        return $rs;
    }

    //select 1 items from sql
    public static function get1items($id_sp, $id_dm)
    {
        $model = new static();
        $sql = "select * from $model->tName where id_sp = $id_sp and id_dm = $id_dm";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        return $rs;
    }

    //select 3 items detail from sql
    public static function get3items()
    {
        $model = new static();
        $sql = "select * from `products_detail`, `products` where products_detail.id_sp = products.id_sp";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        return $rs;

    }

    //select all admin voi category = macbook
    public static function getAllAdmin()
    {
        $model = new static();
        $sql = "select * from `products_detail`, `products` where products_detail.id_sp = products.id_sp and products.id_dm = 1";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        return $rs;
    }


    //check login sql
    public static function login_admin($email, $password, $permission)
    {
        $model = new static();
        $sql = "select * from $model->tName where email = '$email' and password = '$password' and permission = '$permission'";
        // var_dump($sql); exit;
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        // var_dump($rs); exit;
        return $rs;

    }



    //insert
    public function insert(){
        $this->queryBuilder = "insert into $this->tableName (";
        foreach ($this->columns as $col) {
            if($this->{$col} == null){
                continue;
            }
            $this->queryBuilder .= "$col, ";
        }
        $this->queryBuilder = rtrim($this->queryBuilder, ", ");
        $this->queryBuilder .= ") values ( ";
        foreach ($this->columns as $col) {
            if($this->{$col} == null){
                continue;
            }
            $this->queryBuilder .= "'" . $this->{$col} ."', ";
        }
        $this->queryBuilder = rtrim($this->queryBuilder, ", ");
        $this->queryBuilder .= ")";

        $stmt = $this->conn->prepare($this->queryBuilder);
        try{

            $stmt->execute();
            $this->id = $this->conn->lastInsertId();
            return $this;
        }catch(Exception $ex){
            var_dump($ex->getMessage());die;
        }
    }
    //edit
    function update(){
        $this->queryBuilder = "update $this->tableName set ";

        foreach ($this->columns as $col) {
            if($this->{$col} == null){
                continue;
            }
            $this->queryBuilder .= " $col = '" . $this->{$col} . "', ";
        }

        $this->queryBuilder = rtrim($this->queryBuilder, ", ");

        $this->queryBuilder .= " where ma_sp = $this->ma_sp";

        
        $stmt = $this->conn->prepare($this->queryBuilder);
        // var_dump($stmt);die;
        try{
            $stmt->execute();
            return $this;
        }catch(Exception $ex){
            var_dump($ex->getMessage());
            die;
        }
    }

    //find 
    public static function find($id){
        // echo $id; die;
        $model = new static();
        $sql = "select * from $model->tableName where id = $id";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        // var_dump($result[0]); die;

        if (count($result) > 0) {
            return $result[0];
        } else {
            return null;  
        }
    }












}



?>