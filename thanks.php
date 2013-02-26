<?php $title = 'Thanks' ?>
<?php include 'form.php' ?>
<?php
$email = $GLOBALS['email'];
IF ($email && $email != '') {
    $newfile = fopen("emails2.txt", "a+");
    fwrite($newfile,$email);
    fclose($newfile);;
}
?>

<?php echo('Thanks for your submit! We will lorem ipsum your email with care and good will!') ?>
<?php include 'layout.php' ?>