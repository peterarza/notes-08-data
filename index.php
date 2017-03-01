<?php
// The code below attaches our dbconnect.php file to this file.
    include_once 'php/dbconnect.php';
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
            <p>Write your title and notes entry below. Then click on the submit button.</p>
        </header>  

            <section class="note-hold">
                <section class="ink-holder">

                    <!-- The form below is called 'notesForm'. Its job is to determine using the action onsubmit and method attributes what will happen when someone clicks on the submit button. In this case our form will reach out and reference the upload.php file when the submit button is clicked. -->

                    <form name="notesForm" action="php/upload.php" onsubmit="return" method="post">
                        <p>
                            <input type="text" name="title" id="title" placeholder=" Note Title">
                        </p>    

                        <p>
                            <textarea type="text" name="note" id='note' placeholder="Your Note Entry"></textarea>
                        </p>   

                        <input type="submit" id="submitbutton" value="Submit Note"> 

                    </form>

                </section>

            </section>








         

           

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        </div>
    </body>
</html>
