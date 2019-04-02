<?php
            if (isset($_GET['szam1']) && isset($_GET['szam2']) && isset($_GET['paros']))
            {
                $szam1 = $_GET['szam1'];
                $szam2 = $_GET['szam2'];
                $paros = $_GET['paros'];

                $file = fopen("szamok.txt", "a+") or die("szar vagy");
                

                if($szam1 >= $szam2)
                    die("az elso szam nagyobb v egyenlo mint a masodik, ezt elbasztad");

                for ($i=$szam1; $i <= $szam2; $i++) { 
                    if ($paros == "paros" && $i % 2 ==0) 
                        fwrite($file, $i."\n");
                    if($paros == "paratlan" && $i % 2 ==1)
                        fwrite($file, $i."\n");
                }
                
                fclose($file);

                echo filesize("szamok.txt")." bajt <br>n";
                echo fread(fopen("szamok.txt", "a+"), filesize("szamok.txt"));

            }
?>