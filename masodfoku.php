<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Levi hiper-szuper másodfokú számolója</title>
</head>

<body>



    <form action="" style="height:100vh; ">
        <fieldset>
            <legend style="background-color:white ;">Másodfoku számoló</legend>
            <center>
                <div style="padding-top: 10%;">
                    <input type="number" name="a" class="ipos"> <br>
                    <input type="number" name="b" class="ipos"> <br>
                    <input type="number" name="c" class="ipos"><br>
                    <input type="submit" value="számolás" id="subuwu">
                    <div id="kaka">
                        <?php
                        $a = $_GET["a"];
                        $b = $_GET["b"];
                        $c = $_GET["c"];
                        if ($a == 0 && $b == 0 && $c == 0) {
                            echo "azonosság";
                        } elseif ($a == 0 && $b == 0) {
                            echo "ellentmondás";
                        } elseif ($a == 0) {
                            echo "elsőfokú x=-<sup>c</sup>/<sub>b</sub>";
                        } elseif ($a != 0) {
                            $d = $b * $b - (4 * $a * $c);


                            if ($d > 0) {
                                $d = sqrt($b * $b - (4 * $a * $c));
                                $x = (- ($b) + $d) / (2 * $a);
                                $x2 = (- ($b) - $d) / (2 * $a);
                                echo "2 megoldás<br>x1= ", $x, "<br>x2= ", $x2;
                            } elseif ($d == 0) {
                                $d = sqrt($b * $b - (4 * $a * $c));
                                $x = (- ($b) - $d) / (2 * $a);
                                echo "1 megoldás<br>x= ", $x;
                            } elseif ($d < 0) {
                                echo "nincs megoldása";
                            }
                        }
                        ?>
                    </div>
                </div>

        </fieldset>
    </form>

</body>

</html>