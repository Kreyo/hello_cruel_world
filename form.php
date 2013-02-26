
    <?php $title='Form' ?>

    <form method="post" action="thanks.php">
        <input type="text" name="emaily" placeholder="Your email here">
        <a href ="thanks.php"><input type="submit" value="Submit!"></a>
    </form>
    <?php
                 global $email;
                 if (isset($_GET['emaily'])){
                   $email= trim($_GET['emaily']).PHP_EOL;
                 }
    ?>

