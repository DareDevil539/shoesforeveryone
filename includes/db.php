<?php

require 'config.php';

$mysqli = mysqli_connect(
  $config['db']['server'],
  $config['db']['username'],
  $config['db']['password'],
  $config['db']['dbName']
);

if (!$mysqli) {
    echo "I can`t connect to the database!<br/>";
    echo mysqli_connect_error() . PHP_EOL;
    exit;
}
