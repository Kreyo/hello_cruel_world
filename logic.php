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

if (isset($section)) {
    require $section . '.php';
}