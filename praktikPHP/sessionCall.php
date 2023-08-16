<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <body>    
    <?php
    echo "Favorite Color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite Animal is " . $_SESSION["favanimal"] . ".";
    ?>
    </body>
</html>