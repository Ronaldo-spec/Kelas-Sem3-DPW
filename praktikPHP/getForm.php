<html>
    <head>

    </head>
    <body>
        <?php
        if(isset($_GET["myname"])and isset($_GET["myaddress"])) {
            echo "Selamat Datang " . $_GET["myname"] . "!!<br>"; 
            echo "Dari " . $_GET["myaddress"];
        } else {
            echo "Anda harus mengakses halaman ini dari form1.hmtl";
        }
        ?>
    </body>
</html>