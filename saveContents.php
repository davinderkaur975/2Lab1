<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Save Contents</title>
</head>
<body>
    <h1>Save Information....</h1>

    <?php
        $movieName = $_POST['movieName'];
        echo 'Movie Name: ' . $movieName . '<br />';
        $actorName = $_POST['actorName'];
        echo 'Actor Name: ' . $actorName . '<br />';
        $actoressName = $_POST['actoressName'];
        echo 'Actoress Name: ' . $actoressName . '<br />';
        $directorName = $_POST['directorName'];
        echo 'Director Name: ' . $directorName . '<br />';
        $releaseYear = $_POST['releaseYear'];
        echo 'Release Year: ' . $releaseYear . '<br />';

        //Let's connect to the database(DB) and save our file
        //Step 1 - connect to the DB
        $conn = new PDO('mysql:host=aws.computerstudi.es;dbname=gc200361589',  'gc200361589',  'RUxpI_An__');

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Step 2 - create a SQL command
        $sql = "INSERT INTO contents (movieName, actorName, actoressName, directorName, releaseYear)
                VALUES (:movieName, :actorName, :actoressName, :directorName, :releaseYear)";

        //Step 3 - "prepare" the command to prevent SQL injection attacks
        $cmd = $conn->prepare($sql);
        $cmd->bindParam(':movieName', $movieName, PDO::PARAM_STR, 30);
        $cmd->bindParam(':actorName', $actorName, PDO::PARAM_STR, 30);
        $cmd->bindParam(':actoressName', $actoressName, PDO::PARAM_STR, 30);
        $cmd->bindParam(':directorName', $directorName, PDO::PARAM_STR, 30);
        $cmd->bindParam(':releaseYear', $releaseYear, PDO::PARAM_INT, 4);


        //Step 4 - execute the SQL command
        $cmd->execute();
        //Step 5 - close the connection to the DB
        $conn = null;
        //step 6 - redirect to a new page
        header('location:contents.php');
    ?>
</body>
</html>
