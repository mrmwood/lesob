<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>example-char_length-function - php mysql examples | w3resource</title>
<meta name="description" content="example-char_length-function - php mysql examples | w3resource">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h2>This is it List of Snippets from Teacher and Student Snippets:</h2>
<table class='table table-bordered'>
<tr>
<th>Publisher's Name</th><th>Character length</th>
</tr>
<?php
include 'connect.php';
$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
foreach($dbh->query('SELECT snippet,CHAR_LENGTH(snippet) AS "character length" FROM student_s WHERE CHAR_LENGTH(snippet)>1') as $row) {

echo "<tr>";
echo "<td>" . $row['snippet'] . "</td>";
echo "<td>" . $row['character length'] . "</td>";
echo "</tr>";
}
?>
</tbody></table>


<table class='table table-bordered'>
<tr>
<tr>
<th>Publisher's Name</th><th>Character length</th>
</tr>

<?php
foreach($dbh->query('SELECT snippet,CHAR_LENGTH(snippet) AS "character length" FROM teacher_s WHERE CHAR_LENGTH(snippet)>1') as $row) {
echo "<tr>";
echo "<td>" . $row['snippet'] . "</td>";
echo "<td>" . $row['character length'] . "</td>";
echo "</tr>";
}
?>
</tbody></table>
</div>
</div>
</div>
</body>
</html>
