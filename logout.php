<?php
require 'db_conn.php';
session_start();
session_destroy();
header('Location: login.php');
?>