<?php
//start a session
session_start();

//destroy all session
session_destroy();

header('location: ../page/home.php');
