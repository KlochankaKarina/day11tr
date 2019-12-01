<?php
ini_set ('display_errors',1);
error_reporting(E_ALL);
require './classes/loader.php';

$page= new IndexPage();
$page->render();
?>