
    <?php $title='Form' ?>
    <?php require "header.php" ?>
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

    <form method="post" action="/contactform-submit">
        <input type="text" name="emaily" placeholder="Your email here">
        <input type="submit" value="Submit!">
    </form>
    <?php require 'footer.php' ?>

