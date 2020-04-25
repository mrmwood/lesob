<?php
include 'connect.php';
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$sql = "SELECT * FROM student_s, teacher_s";
$result = $conn->query($sql);

$outp = "[";
while($rs = $result->fetch_assoc()) {
    if ($outp != "[") {$outp .= ",";}
        $outp .= '{"ID_student_s":"'. $rs["ID_student_s"]     . '",';
        $outp .= '"snippet":"'. $rs["snippet"]     . '"}';
}
$outp .="]";

$conn->close();

echo($outp);

?>
