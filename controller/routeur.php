<?php

define('VIEW', 'views/');
define('CONTROLLER', 'controller/');

function pres()
{
  require(VIEW . 'presentation.php');
}

function stock()
{
  require(VIEW . 'stock.php');
}

function contact()
{
  require(VIEW . 'contact.php');
}
