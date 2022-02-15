<!DOCTYPE html>
<html lang="hu">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,500;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <link rel="icon" href="loo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Levi hiper-szuper másodfokú számolója</title>
</head>

<body>
    <form action="" style="height: 95vh; ">
        <fieldset>
            <legend id="leg">Levi másodfokú számolója</legend>
            <center>
                <div style="padding-top: 10%;">
                    <input type="number" name="a" placeholder="'A' érték" class="ipos"> <br>
                    <input type="number" name="b" placeholder="'B' érték" class="ipos1"> <br>
                    <input type="number" name="c" placeholder="'C' érték" class="ipos2"><br>
                    <b><input type="submit" value="számolás" id="subuwu"></b>
                    <div id="kaka">

                        <?php
                        
                        if ( isset($_GET["a"]) == "" || $_GET["a"] == "" || $_GET["a"] == "") {
                            echo "Adja meg az 'a','b' és 'c' értékét";
                        }
                        else{
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
                                    echo "2 megoldás<br>x1= ", round($x,2), "<br>x2= ", round($x2,2);
                                } elseif ($d == 0) {
                                    $d = sqrt($b * $b - (4 * $a * $c));
                                    $x = (- ($b) - $d) / (2 * $a);
                                    echo "1 megoldás<br>x= ", round($x,2);
                                } elseif ($d < 0) {
                                    echo "nincs megoldása";
                                }
                            }
                        }
                        ?>
                    </div>
                </div>

        </fieldset>
    </form>

</body>

</html>