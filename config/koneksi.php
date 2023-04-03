<?php
define('HOST','localhost');define('USER','root');define('DB','ecommdb');define('PASS','');
$conn = new mysqli(HOST,USER,PASS,DB) or die('Connection error to the database');