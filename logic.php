<?php
if(isset($_SERVER['PATH_INFO'])) {
  switch($_SERVER['PATH_INFO']) {
      case '/about':
          $section = 'about';
          break;
      case '/contact':
          $section = 'form';
          break;
      default:
          $section = 'main_template';
          break;
  }
}
else {$section = 'main_template';}

if (isset($section  )) {
    require $section . '.php';
}