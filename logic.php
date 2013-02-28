<?php
if(isset($_GET['do'])) {
  switch($_GET['do']) {
      case 'about':
          $section = 'about';
          break;
      case 'form':
          $section = 'form';
          break;
      default:
          $section = 'main_template';
          break;
  }
}
else {$section = 'main_template';}

if (isset($section)) {
    require $section . '.php';
}