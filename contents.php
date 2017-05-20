<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contents</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
<h1>Movie Details</h1>

<?php
//Step 1 - connect to database
$conn = new PDO('mysql:host=aws.computerstudi.es;dbname=gc200361589',  'gc200361589',  'RUxpI_An__');
//Step 2 - create the SQL command
$sql = "SELECT * FROM contents";
//Step 3 - prepare the SQL command
$cmd = $conn->prepare($sql);
//Step 4 - execute the command
$cmd->execute();
//Step 5 - store the results
$contents = $cmd->fetchAll();
//Step 6 - remove the DB connection
$conn = null;
//Step 7 - loop over the results and display them to the screen
echo '<table class="table table-striped table-hover">
              <tr><th>Movie Name</th>
                     <th>Actor Name</th>
                     <th>Actoress Name</th>
                     <th>Director Name</th>
                     <th>Release Year</th>
              </tr>';
foreach($contents as $content)
{
    echo '<tr><td>'.$content['movieName'].'</td>
                     <td>'.$content['actorName'].'</td>
                     <td>'.$content['actoressName'].'</td>
                     <td>'.$content['directorName'].'</td>
                     <td>'.$content['releaseYear'].'</td></tr>';
}
echo '</table>';
?>
</body>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
