<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();
$app->get('/', function () {
    require 'templates/main_template.php';
});
$app->get('/about', function() {
   require 'templates/about.php';
});
$app->get('/contact', function() {
    require 'templates/form.php';
});
$app->get('/view/:secretkey', function($secretkey) {
   if($secretkey == 'pa$$word'){
       $handle = @fopen("emails2.txt", "r");
       if ($handle) {
           while (($buffer = fgets($handle, 4096)) !== false) {
               echo $buffer;
           }
           if (!feof($handle)) {
               echo "Error: unexpected fgets() fail\n";
           }
           fclose($handle);
       }
   }else {
       echo "Ha-ha, sucker!";
   }
});
$app->run();