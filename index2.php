<html>
    <body>
        
        <form action="index3.php" method="GET">
            első szám:<input type="number" name="szam1" required><br>
            második szám:<input type="number" name="szam2" required><br>
            <input type="radio" name="paros" value="paros" required> paros
            <input type="radio" name="paros" value="paratlan" required> paratlan<br>
            <input type="submit" value="tovabb">
        </form>
        <?php
            
            $file = fopen("szamok.txt", "r") or die("nincs file");
            echo filesize("szamok.txt")." bajt \n";
            echo fread($file, filesize("szamok.txt"));
        ?>
    </body>
</html>