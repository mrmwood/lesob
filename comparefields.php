<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>example-char_length-function - php mysql examples | w3resource</title>
<meta name="description" content="example-char_length-function - php mysql examples | w3resource">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
</head>
<body>


  <canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>



<div class="container">
<div class="row">
<div class="col-md-12">
<h2>3 List of publisher's name and its character length, only if the character length is more than twenty:</h2>
<table class='table table-bordered'>
<tr>
<th>Publisher's Name</th><th>Character length</th>
</tr>
<?php
include 'connect.php';
$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
foreach($dbh->query('SELECT snippet,CHAR_LENGTH(snippet) AS "character length" FROM student_s WHERE CHAR_LENGTH(snippet)>20') as $row) {

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
