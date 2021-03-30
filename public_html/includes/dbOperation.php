<?php

class DBOperation {

    private $con;
    function __construct()
    {
        include_once('../database/db.php');
        $db = new Database();
        $this->con = $db->connect();

    }

    public function addCategories($parent,$cat) {
        $pre_sta = $this->con->prepare("INSERT INTO `category`(`parent_cat`, `category_name`, `status`) VALUES (?,?,?) ");
        $status =1;
        $pre_sta->bind_param("isi",$parent,$cat,$status);
        $result = $pre_sta->execute() or die($this->con->error);
        if($result) {
            return "Category Added";
        } else {
            return 0;
        }

    }

    // public function addBrand() {
    //     $pre_sta = $this->con->prepare('');
    //     $pre_sta->bind_param('');
    //     $result =$pre_sta->execute() or die($this->con->error);
    //     if($result){
    //         echo "Brand Added";
    //     } else {
    //         return 0;
    //     }
    // }

    // public function addProducts() {
    //     $pre_sta = $this->con->prepare('');
    //     $pre_sta->bind_param('');
    //     $result = $pre_sta->execute() or die($this->con->error);
    //     if($result) {
            
    //     }
    // }
}

$drb = new DBOperation;

echo $drb->addCategories(1,'electronics');

?>