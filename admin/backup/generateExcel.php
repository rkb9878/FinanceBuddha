<?php
// Original PHP code by Chirp Internet: www.chirp.com.au
// Please acknowledge use of this code by including this header.
include_once '../../database/database.php';

$today=date('y-m-d');
$query = "SELECT `id`, `name`, `mobile`, `email`, `state`, `city`, `pincode`, `loan_type`, `amount`, `datetime` FROM `loan`";
$result = mysqli_query($conn, $query);
$data=array();
while ($row1 = mysqli_fetch_assoc($result)) {
    array_push($data,$row1);
}
function cleanData(&$str)
{
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
}

// file name for download
$filename = "loanDetail" . date('Ymd') . ".xls";

header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");

$flag = false;
foreach($data as $row) {
    if(!$flag) {
        // display field/column names as first row
        echo implode("\t", array_keys($row)) . "\n";
        $flag = true;
    }
    array_walk($row, __NAMESPACE__ . '\cleanData');
    echo implode("\t", array_values($row)) . "\n";
}

exit;
?>