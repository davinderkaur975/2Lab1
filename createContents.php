<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Contents</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
    <main class="container">
    <form action="saveContents.php" method="post">
        <fieldset>
            <label for="movieName" class="col-sm-2">Movie Name:</label>
            <input name="movieName" id="movieName" />
        </fieldset>
        <fieldset>
            <label for="actorName" class="col-sm-2">Actor Name:</label>
            <input name="actorName" id="actorName" />
        </fieldset>
        <fieldset>
            <label for="actoressName" class="col-sm-2">Actoress Name:</label>
            <input name="actoressName" id="actoressName" />
        </fieldset>
        <fieldset>
            <label for="directorName" class="col-sm-2">Director Name:</label>
            <input name="directorName" id="directorName" />
        </fieldset>
        <fieldset>
            <label for="releaseYear" class="col-sm-2">Release Year:</label>
            <input name="releaseYear" id="releaseYear" />
        </fieldset>
        <button class="btn btn-success col-sm-2">Submit</button>
    </form>
    </main>
</body>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
