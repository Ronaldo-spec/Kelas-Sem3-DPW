<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
    <?php
     $tujuan="Malang";
     
    echo "Mau main kemana? ".$tujuan."<br>";
    echo "<br> Pesan: ";
    
    switch ($tujuan) {
        case 'Batu':
            echo "<b>Jangan lupa bawa Jake</b>";
            break;
        case 'Bandung':
            echo "<b>Awas kalau belanja Laper Mata</b>";
            break;
        case 'Bali':
            echo "<b>Pakai sunblock SPF 50</b>";
            break;
        default:
        "<b>Yaudah Belajar Aja</b>";
    }
    
    ?>
    </body></html>