<?php
require_once("model/index.php");
class modelController{
    private $model;

    public function __construct(){
        $this->model = new Model();
    }

    //show
    static function index(){
        $product = new Model();
        $data = $product->show("products","1");
        require_once("view/index.php");
    }
    //new
    static function new(){
        require_once("view/new.php");
    }
    //save
    static function save(){
        $name = $_REQUEST['name'];
        $price = $_REQUEST['price'];
        $data = "'".$name."',".$price;
        $product = new Model();
        $otherdata = $product->insert("products",$data);
        header("location:".urlsite);
    }
    //edit
    static function edit(){
        $id = $_REQUEST['id'];
        $product = new Model();
        $data = $product->show("products","id=".$id);
        require_once("view/edit.php");
    }
    //update
    static function update(){
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $price = $_REQUEST['price'];
        $data = "name='".$name."',price=".$price;
        $product = new Model();
        $otherdata = $product->update("products",$data,"id=".$id);
        header("location:".urlsite);
    }
    //delete
    static function delete(){
        $id = $_REQUEST['id'];
        $product = new Model();
        $data = $product->delete("products","id=".$id);
        header("location:".urlsite);
    }
}