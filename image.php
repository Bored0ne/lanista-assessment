<?php
  $url = $_GET['url'];

  // This needs to be configured for the server hosting the database
  $mysqli = new mysqli("localhost", "user", "password", "testdb");

  $mysqli->query("CREATE TABLE `testdb`.`referrers` (
    `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
    `url` VARCHAR(45) NOT NULL COMMENT '',
    `timestamp` VARCHAR(45) NOT NULL COMMENT '',
    PRIMARY KEY (`id`)  COMMENT '',
    UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '');");

  $mysqli->query('INSERT INTO referrers(url, timestamp) VALUES ("' . $mysqli->real_escape_string($_GET['url']) . '", NOW())');

  header('Content-Type: image/png');
  // This could easily be replaced with code to look through the database to find the baseurl of $url and return a random image matching a list of allowed images for that website
  // Or you know a 1x1 pixel;
  readfile('./image.png');
 ?>
