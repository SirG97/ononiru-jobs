<?php
session_start();
require '../../vendor/autoload.php';

use Ononiru\Config\Database;
use Ononiru\Core\Job;

$user_id = $_SESSION['user_id'];

