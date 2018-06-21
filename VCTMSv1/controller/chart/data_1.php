<?php
    include "../../db/chart/connect.php";
    
    //$sql = "select * from tbl_nvd3_lesson";
    $sql = "SELECT model, SUM(actual_pcs) AS actual_pcs FROM tbl_nvd3_lesson GROUP BY model";
    $result = mysqli_query($connect, $sql);
    
    $data = array();
    
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;    
    }
    
    
    //echo "<pre>";
    //print_r($data);

    
    echo json_encode($data, JSON_NUMERIC_CHECK);
    mysqli_close($connect);
?>