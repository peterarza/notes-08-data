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
                // Create variables to locate and pull data from the database.

            $sql = "SELECT id, title, note FROM entry";
            $noteresult = $db -> query($sql);
          

            // Display the data per row in the table using an if statement and a while loop. The if statement determines if there is any content to display. The while loop displays all the content while the if statement says that there is still content to show.

            if ($noteresult -> num_rows > 0)    {
                while ($row = $noteresult -> fetch_assoc()) {
                    echo '<h1>Note # ' . $row['title'] . '</h1><p>' . $row['note'] . '</p>';
                }

            }else {
                echo 'No notes to display at this time.';
            }


            // Close our database connection.
            $db -> close();



            ?>



        </section>

         </div>
    </body>
</html>







