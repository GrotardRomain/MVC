<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// include(VIEW . 'header.php');
//
// include(VIEW . 'vcard.php');
//
// include(VIEW . 'footer.php');

require('controller/routeur.php');


try{
  include(VIEW . 'header.php');

  if(isset($_GET['action'])) {
    if ($_GET['action'] == 'presentation') {
      pres();
    }
    elseif ($_GET['action'] == 'stock') {
      stock();
    }
    elseif ($_GET['action'] == 'contact') {
      contact();
    }
  }
  else {
    include(VIEW . 'vcard.php');
  }
}

catch(Exception $e) {
  echo 'Error : ' . $e->getMessage();
}

include(VIEW . 'footer.php');
