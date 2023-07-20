<?php
// Create a connection to the skyscripdb database
// Set the encoding to utf-8
// Set the database access details as constants
Define ('DB_USER', 'isaacadrine');
Define ('DB_PASSWORD', '012.adrine@IsaAc.com');
Define ('DB_HOST', 'localhost');
Define ('DB_NAME', 'skyscripdb');
// Make the connection
$dbcon = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
mysqli_set_charset($dbcon, 'utf8'); // Set the encoding...