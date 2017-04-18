<?php

/**
 * A method to check if a Post request has been made.
 *    
 * @return boolean
 */
function isPostRequest() {
    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
}

/**
 * A method to check if a Get request has been made.
 *    
 * @return boolean
 */
function isGetRequest() {
    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'GET' );
}

//check email address for validity
function isValidEmail($value) {
    if ( empty($value) ) {
        return false;
    }
    if ( filter_var($value, FILTER_VALIDATE_EMAIL) == false ) {
            return false;
    }
    
    return true;
}

//checks if field is empty
function isFieldPopulated($value) {
    if ( empty($value) ) {
        return false;
    }
    return true;
}