<?php
require_once '../model/database.php';

class Controller {
    private $model;

    public function __construct() {
        $this->model = new Database('mysql:host=localhost;dbname=db_users', 'KodyWeigel', 'password');
    }

    public function showData() {
        $data = $this->model->getData();
        include '../view/userList.php'; // Use include to include the view file
    }
}
?>