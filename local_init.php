<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 12/23/16
 * Time: 12:12 PM
 */

require_once "Settings.php";

$db_root = Settings::$db_root;
$db_user = Settings::$db_user;
$db_pass = Settings::$db_pass;
$db_name = Settings::$db_name;

$database_root = new mysqli($db_root, $db_user, $db_pass);

$database_root->query(
    "
    DROP DATABASE $db_name;
    ")
    or die($database_root->error);

$database_root->query(
    "
    CREATE DATABASE $db_name;
    ")
    or die($database_root->error);

$database = new mysqli($db_root, $db_user, $db_pass, $db_name);

$database->query("
    CREATE TABLE TeamMembers 
      (id integer AUTO_INCREMENT NOT NULL PRIMARY KEY ,first VARCHAR(30), last VARCHAR(30), email VARCHAR(40), title VARCHAR(100), category VARCHAR(10), has_image INTEGER(1))
  ")
    or die($database->error);

$database->query("
    CREATE TABLE Alumni (id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY, first VARCHAR(30), last VARCHAR(30), title VARCHAR(100), category VARCHAR(10))
")
    or die($database->error);

$database->query("
    CREATE TABLE Admins (id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY, first VARCHAR(30), last VARCHAR(30), email VARCHAR(40), password VARCHAR(100))
")
    or die($database->error);