<!DOCTYPE html>
<!-- Web site host www.ajfiorineit.freeiz.com -->
<html>
    <head>
        <meta charset="utf-8">
        
        <title>Software Security Website</title>
<!-- Bootstrap/CSS -->
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style3.css">

    </head>
    <body>
 
        <?php
            require_once 'includes/session-start.req-inc.php';
            include_once 'functions/dbconnect.php';
            include_once 'functions/login-function.php';
            include_once 'functions/until.php';
        ?>
        
        <?php
                $view = filter_input(INPUT_GET, 'view');


                if ( isPostRequest() ) {
                    $userName = filter_input(INPUT_POST, 'userName');
                    $userPassword = filter_input(INPUT_POST, 'userPassword');

                    if ( isValidUser($userName, $userPassword) ) {
                            $_SESSION['isValidUser'] = true;
                            header('Location: index.php?view=userdefault');
                        }
                        else if ( !isset($_SESSION['isValidUser']) || $_SESSION['isValidUser'] !== true )
                            {
                            $results = 'Invalid Login. Sorry, please try again';
                            }
                        else{

                        }
                    }
        ?>

<br/><br/>
    <center>
    <div class="container">

      <div class="starter-template">
            <?php       

               if (  $view === 'userdefault' )
                {
//main user view page
                    include 'templates/userdefault.html.php';
                }
                else
                {
// Default view for log in
                    include 'templates/default.html.php';
                }

                ?>

                <?php 
//output of success or error messages
                include 'includes/results.html.php';
                ?>
      </div>
    </div>
</center>
<!--Ends container-->
    </body>
</html>
