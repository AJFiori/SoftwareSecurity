<?php
/**
 * Function to extablish a databse connection
 * 
 * @return PDO Object
 * 
 * 
 *      'DB_DNS' => 'mysql:host=31.220.17.53;dbname=antho137_SE417AF',
        'DB_USER' => 'antho137_SE417AF',
        'DB_PASSWORD' => 'software1'
 * 
 * 
 */  
function dbconnect() {
    $config = array(
        'DB_DNS' => 'mysql:host=31.220.17.53;dbname=antho137_SE417AF',
        'DB_USER' => 'antho137_SE417AF',
        'DB_PASSWORD' => 'software1'
    );

    try {
        /* Create a Database connection and 
         * save it into the variable */
        $db = new PDO($config['DB_DNS'], $config['DB_USER'], $config['DB_PASSWORD']);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (Exception $ex) {
        /* If the connection fails we will close the 
         * connection by setting the variable to null */
        $db = null;
        $message = $ex->getMessage();
        include '../includes/error.php';
    }

    return $db;
}



