<?php

// connect to database
$conn = mysqli_connect('127.0.0.1', 'rasmus', 'test1234', 'secondopinion_db');

// check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}



/* This is a dummy database */
$items = [
    [
        'title' => 'Shutter Island',
        'rating' => 4,
        'image' => 'assets/images/goodwill.jpg'
    ],
    [
        'title' => 'Good Will Hunting',
        'rating' => 2,
        'image' => 'assets/images/goodwill.jpg'
    ],
    [
        'title' => 'White Chicks',
        'rating' => 5,
        'image' => 'assets/images/goodwill.jpg'
    ]
];
/* End of dummy database */