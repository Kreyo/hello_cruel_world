<?php
  if (isset($_POST['email']) && trim($_POST['email'] !=='')) {
      $email=trim($_POST['email']).PHP_EOL;
      $newfile = fopen("emails2.txt", "a+");
      fwrite($newfile,$email);
      fclose($newfile);
      echo('thanks!');
  }
/**
 * Created by JetBrains PhpStorm.
 * User: Evilness
 * Date: 2/21/13
 * Time: 11:44 PM
 * To change this template use File | Settings | File Templates.
 */
