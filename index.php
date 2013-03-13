<?php
require 'vendor/autoload.php';
$twigView = new \Slim\Extras\Views\Twig();
$app = new \Slim\Slim(array(
    'view' => $twigView
));
$loader = new Twig_Loader_Filesystem('templates/');
$twig = new Twig_Environment($loader,  array(
    'cache' => 'Data/cache/',));
$app->get('/', function() use($twig) {
    echo $twig->render('main_template.html.twig');

});
$app->get('/about', function() use($twig) {
    echo $twig->render('about.html.twig');
});
$app->get('/contact', function() use($twig) {
    echo $twig->render('form.php.twig');
});
$app->get('/view/:secretkey', function($secretkey) {
   if($secretkey == 'pa$$word'){
       $handle = @fopen("Data/emails2.txt", "r");
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
$app->post('/contactform-submit', function(){

    if (isset($_GET['emaily'])) {
        IF (trim($_GET['emaily']) && trim($_GET['emaily']) != '') {
            $email = trim($_GET['emaily']).PHP_EOL;
            $newfile = fopen("Data/emails2.txt", "a+");
            fwrite($newfile,$email);
            fclose($newfile);;
        }
    }


});
$app->run();