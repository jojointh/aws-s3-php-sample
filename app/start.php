<?php

use Aws\S3\S3Client;

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require 'vendor/autoload.php';

$config = require('config.php');

// S3
$s3 = S3Client::factory([
  'credentials' => array(
    'key' => $config['s3']['key'],
    'secret' => $config['s3']['secret'],
  ),
  'region' => $config['s3']['region'],
  'version' => 'latest'
]);
