<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    $t = date("H");
    if ($t < "20") {
        # code...
        echo "Have a good day";
    } else {
        # code...
        echo "Have a good night";
    }
    ?>
</body>

</html>