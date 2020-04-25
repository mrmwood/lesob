<?php
include 'connect.php';
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$sql = "SELECT snippet FROM student_s ORDER BY snippet";
$result = $conn->query($sql);
$rowcount=mysqli_num_rows($result);
//echo('Number of student snippets zz:  '. $rowcount . "     ");

$outp = '[{"student_number_of_snippets":' . $rowcount . '}';
//$outp = "[";
while($rs = $result->fetch_assoc()) {

    if ($outp != "[") {$outp .= ",";}
        $outp .= '{"snippet":"'. $rs["snippet"]     . '"}';
}
$outp .="]";



$sql2 = "SELECT snippet FROM teacher_s ORDER BY snippet";
$result2 = $conn->query($sql2);
$rowcount2=mysqli_num_rows($result2);
//echo('Number of teacher snippets:  '. $rowcount2 . "     ");

$outp2 = '[{"teacher_number_of_snippets":' . $rowcount2 . '}';
//$outp2 = "[";
while($rs2 = $result2->fetch_assoc()) {
    if ($outp2 != "[") {$outp2 .= ",";}
        $outp2 .= '{"snippet":"'. $rs2["snippet"]     . '"}';
}
$outp2 .="]";

$conn->close();

//echo($outp);
//echo($outp2);

//This will merge the two json strings above
echo $merger=json_encode(array_merge(json_decode($outp, true),json_decode($outp2, true)));


?>
