<form action="" method="id=5">
    Primer número: <input type="text" name="pnum"><br>
    Segundo número: <input type="text" name="snum"><br>
    <input type="submit" value = "sumar">
    <p>
        <code>
            <?php
                function sumar(int $a, int $b){
                    return $a+$b;
                }
                if ($_REQUEST){
                    $x= $_REQUEST['pnum'];
                    $y= $_REQUEST['snum'];
                    echo sumar($x,$y);
                }
            ?>
        </code>
    </p>

</form>