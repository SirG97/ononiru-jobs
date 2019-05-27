<?php
/**
 * All job payment should be directed to this api endpoint
 */
session_start();
require '../../vendor/autoload.php';

use Ononiru\Config\Database;
use Ononiru\Core\Job;
