<?php

class db
{
    protected $server = 'localhost';
    protected $username = 'root';
    protected $userpass = '';
    protected $dbname = 'onlineshopping';
    public $connection;



    public function __construct()
    {
        $this->connection = mysqli_connect($this->server, $this->username, $this->userpass, $this->dbname);
        if (!$this->connection) {
            die("Error in connection :" . mysqli_connect_error());
        }
    }

    public function db_insert($sql)
    {
        $result = mysqli_query($this->connection, $sql);
        if ($result) {
            return 'REGISTER SUCCESS';
        }
        return false;
    }

    public function getRow($table, $field, $value)
    {
        $sql = "SELECT * FROM `$table` WHERE `$field`='$value' ";
        $result = mysqli_query($this->connection, $sql);
        if ($result) {
            $rows = [];
            if (mysqli_num_rows($result) > 0) {
                $rows [] = mysqli_fetch_assoc($result);
                return $rows[0];
            }
            return false;
        }
    }


    //to select all the data from any table of the db
    public  function getAll($table)
    {
        $sql = "SELECT * FROM `$table`";
        $query = mysqli_query($this->connection, $sql);
        $data = array();
        while($row = mysqli_fetch_assoc($query))
        {
            $data[] = $row;
        }
        return $data;
    }


    //to select all the data from a specific category in the db
    public  function getAllFrom($table,$column,$id)
    {
        $sql = "SELECT * FROM `$table` WHERE `$column` = $id";
        $query = mysqli_query($this->connection, $sql);
        $data = array();
        while($row = mysqli_fetch_assoc($query))
        {
            $data[] = $row;
        }
        return $data;
    }


    //to insert products into cart of fav 
    public function insertInto($params,$table)
    {
        $columns = implode(',',array_keys($params));
        $values = implode(',',array_values($params));
        $sql = "INSERT INTO $table($columns) VALUES($values)";
        $query = mysqli_query($this->connection,$sql);
        return $query;
    }


    //to insert the user id and the product id into cart or fav
    public function addTo($user_id,$product_id,$table)
    {
        if(isset($user_id) && isset($product_id))
        {
            $params = array(
                "user_id"=>$user_id,
                "product_id"=>$product_id
            );
            $res = $this->insertInto($params,$table);
            return $res;
        }
    }


    //delete products from cart or fav
    public function deleteFrom($product_id, $table)
    {

        $sql = "DELETE FROM `$table` WHERE product_id=$product_id";
        $query = mysqli_query($this->connection, $sql);
        return $query;
    }

    
    
    public function __destruct()
    {
        mysqli_close($this->connection);
    }
}
