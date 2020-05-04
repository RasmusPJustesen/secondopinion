<?php

// connect to database
$conn = mysqli_connect('127.0.0.1', 'rasmus', 'test1234', 'secondopinion_db');

// check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}


$json = file_get_contents('http://127.0.0.1:8000/api/tasks');
$items = json_decode($json);