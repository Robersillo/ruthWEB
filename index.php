<?php

if (isset($_GET['view'])) {
if(file_exists('core/controllers/' . $_GET['view'] . 'Controller.php')) {
  include ('core/controllers/' . $_GET['view'] . 'Controller.php');
 } else {
  include ('core/controllers/errorController.php');
 }
} else {
  include ('core/controllers/indexController.php');
}
?>
