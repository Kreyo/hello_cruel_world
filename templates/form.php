
    <?php $title='Form' ?>
    <?php
    $emailRecorded = false;

    if (isset($_POST['emaily'])) {
        $emailRecorded = true;

    }
    ?>
    <?php if ($emailRecorded) { ?>
        <h3>Thanks!</h3>
        <?php $title='Thank you!' ?>
    <?php }?>

    <form method="post" action="">
        <input type="text" name="emaily" placeholder="Your email here">
        <input type="submit" value="Submit!">
    </form>
    <?php
    if (isset($_GET['emaily'])) {
        IF (trim($_GET['emaily']) && trim($_GET['emaily']) != '') {
            $email = trim($_GET['emaily']).PHP_EOL;
            $newfile = fopen("emails2.txt", "a+");
            fwrite($newfile,$email);
            fclose($newfile);;
        }
    }
    ?>
    <?php include 'layout.php' ?>

