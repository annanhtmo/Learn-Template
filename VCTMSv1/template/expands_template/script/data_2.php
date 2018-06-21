<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = "db_nvd3_lesson";

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch(PDOException $e) {
    echo $e->getMessage();
}

// Prepare your DB query
//$stmt = $dbh->prepare("SELECT * FROM tbl_nvd3_lesson");
$stmt = $dbh->prepare("SELECT model, SUM(actual_pcs) AS actual_pcs FROM tbl_nvd3_lesson GROUP BY model");
$stmt->execute();

$stmt2 = $dbh->prepare("SELECT model, SUM(standard_pcs) AS actual_pcs FROM tbl_nvd3_lesson GROUP BY model");
$stmt2->execute();

// Build an object to hold the data
$returnData = new stdClass();
$returnData->key = "Actual Pcs";
$returnData->color = "#d33f3f";
$returnData->values = $stmt->fetchAll();

$returnData2 = new stdClass();
$returnData2->key = "Standard Pcs";
$returnData2->color = "#4f99b4";
$returnData2->values = $stmt2->fetchAll();

// JSON Encode the data for use in the chart
$chartData = json_encode(array($returnData, $returnData2), JSON_NUMERIC_CHECK);

echo $chartData;
/*$data = array();

$data[] = $returnData;

echo '<pre>';
print_r($returnData);*/

?>