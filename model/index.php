<?php
class Model{
    private $Model;
    private $db;
    private $data;

    public function __construct(){
        $this->Model = array();
        $this->db = new PDO('mysql:host=localhost;dbname=mvc',"root","040319659");
    }

    public function insert($table, $data){
        $query = "INSERT INTO ".$table." VALUES (null,".$data.")";
        $result = $this->db->query($query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function show($table, $condition){
        $query = "SELECT * FROM ".$table." WHERE ".$condition;
        $result = $this->db->query($query);
        while($rows = $result->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->data[]=$rows;
        }
        return $this->data;
    }

    public function update($table, $data, $condition){
        $query = "UPDATE ".$table." SET ".$data." WHERE ".$condition;
        $result = $this->db->query($query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($table, $condition){
        $delete = "DELETE FROM ".$table." WHERE ".$condition;
        $result = $this->db->query($delete);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}