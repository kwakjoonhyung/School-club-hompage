<?php
session_start();

$connect = mysqli_connect('27.96.129.65', 'aaa', '1234', 'web_project', '3306');


mysqli_close($connect);
?>