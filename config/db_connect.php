<?php

// connect to database
$conn = mysqli_connect('127.0.0.1', '', '', '');

// check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}