<?php
    include "connect.php";
    
    //$sql = "select * from tbl_nvd3_lesson";
    $sql = "SELECT model, SUM(actual_pcs) AS actual_pcs FROM tbl_nvd3_lesson GROUP BY model";
    $result = mysql_query($sql);
    
    $data = array();
    
    while($row = mysql_fetch_assoc($result)){
        $data[] = $row;    
    }
    
    
    //echo "<pre>";
    //print_r($data);

    
    echo json_encode($data, JSON_NUMERIC_CHECK);
    mysql_close($connect);
?>