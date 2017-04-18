<?php

    require_once 'includes/session-start.req-inc.php';
    require_once 'includes/access-required.html.php';


    $currentUserID = $_SESSION['currentUserID'];
    $userView = filter_input(INPUT_GET, 'user_view');
?>
<div class ="AM">
    <nav>
        <ul class="nav nav-pills nav-justified">
                                                  
        <?php            
            if ( isset($_SESSION['isValidUser']) &&  $_SESSION['isValidUser'] === true ) 
            {
                include 'links.html.php';
            }            
        ?>
        </ul>
        <br/><br/>
    </nav>
 </div> 
<br/>
<div class="WTOS">
    <h1 class="cover-heading">Hello <?php echo $_SESSION['currentUserName']; ?>, You're now logged in.
    </h1>
</div>




