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

    public function getAllRecords($table) {
        $pre_sta = $this->con->prepare("SELECT * FROM ".$table);
        $pre_sta->execute() or die($this->con->error);
        $result= $pre_sta->get_result();
        $rows = array();
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        }
        return "No_DATA";
    }
}

$drb = new DBOperation;

// echo $drb->addCategories(1,'electronics');
echo "<pre>";
print_r($drb->getAllRecords('category '));

?>