<?php
// The code below attaches our dbconnect.php file to this file.
    include_once 'dbconnect.php';
?>


<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Persistent Data Storage</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>

        <div class="main">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header>    
            <h1>Notebook</h1>
            <a href="../index.php">Home</a> <a href="notes.php">Notes</a>
        </header> 

        <section class="note-hold">
            <?php
                /* Before we can upload our notes to the database we have to ensure some basic security measures are in place. The code below prevents users from entering false information to gain access to the database. */

                $title = mysqli_real_escape_string($db, $_POST['title']);
                $note = mysqli_real_escape_string($db, $_POST['note']);

                // Insert user provided data from the form in index.php into the notes table in our database. We will do this using the SQL Query seen below.
                $note_insert = "INSERT INTO entry (title, note) VALUES ('$title', '$note')";

                // Tests the above code to ensure that it properly saves our notes.
                if (mysqli_query($db, $note_insert))    {
                    echo "<br>DEBUG / SUCCESS: Note added to database.";

                }else {
                    echo "<br>DEBUG / FAILED. Could not execute because: " . mysqli_error($db);

                }

                // When you open a database to store, retrieve, get, edit, delete, etc. data, you must always remember to close the connection to the database. Failure to do this may result in security loopholes or performance degradation in your code..

                $db -> close();


            ?>





        </section>






    </div>
</body>
</html>
