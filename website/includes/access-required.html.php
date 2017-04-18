

<?php if ( !isset($_SESSION['isValidUser']) || $_SESSION['isValidUser'] !== true ) : ?>
<h1><a href="../index.php" class="btn btn-lg btn-default">Login</a></h1>
<?php die('<h1>Access Denied</h1> '); endif;  ?>
