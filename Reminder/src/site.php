<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Reminder - ToDo's</title>
    </head>
    <body>
        

        <h1>Reminder - Meine ToDo's</h1>

        <?php
            setlocale(LC_ALL, 'de_DE'); 
            date_default_timezone_set('Europe/Berlin');  
            $datetimeNow = date('Y-m-d H:i:s');

            echo "<b>Aktuelle Zeit:&nbsp&nbsp&nbsp</b>".$datetimeNow;

            echo "<br /><br />";
            echo "<form action='new.php'><input type='submit' value='New'></form>";
            echo "<br /><br />";

            $db_link = mysqli_connect('db', 'admin', 'pw', 'reminder', 3306);
            

            $sql = "SELECT * FROM remind2 ORDER BY datum ASC";
            $db_erg = mysqli_query($db_link, $sql);
            
            echo "<table style='border:0; border-spacing:20px 10px'>";
                echo "<tr style='border: 1px solid black;'>";
                    #echo "<td><b>ID</b></td>";
                    echo "<td><b>überfällig</b></td>";
                    #echo "<td><b>erledigt</b></td>";
                    echo "<td><b>ToDo</b></td>";
                    echo "<td><b>Fällig am</b></td>";
                    echo "<td><b>Kategorie</b></td>";
                    echo "<td><b>Kategorie2</b></td>";
                    echo "<td><b>Kategorie3</b></td>";
                echo "</tr>";

                while ($zeile = mysqli_fetch_array($db_erg, MYSQLI_ASSOC)){
                    if($zeile['datum'] <= $datetimeNow){        #überfällig ja / nein
                        #farbe2 und farbe2 Standard auf schwarz stellen, da in Zeile 74 u. 75 immer benötigt wird.
                        $farbe2 = #000000;
                        $farbe3 = #000000;

                        #Farbe für Kategorie aus DB categories ermitteln. (category)
                        $categfarbe = $zeile['category'];
                        $sql2 = "SELECT color FROM categories WHERE category='$categfarbe'";
                        $db_erg_farbe = mysqli_query($db_link, $sql2);
                        $db_erg_farbe_array = mysqli_fetch_array($db_erg_farbe, MYSQLI_ASSOC);
                        $farbe = $db_erg_farbe_array['color'];
                        #Farbe für Kategorie aus DB categories ermitteln. (category2)
                        $categfarbe2 = $zeile['category2'];
                        $sql2_2 = "SELECT color FROM categories WHERE category='$categfarbe2'";
                        $db_erg_farbe2 = mysqli_query($db_link, $sql2_2);
                        $db_erg_farbe_array2 = mysqli_fetch_array($db_erg_farbe2, MYSQLI_ASSOC);
                        if($db_erg_farbe_array2 != null){
                            $farbe2 = $db_erg_farbe_array2['color'];
                        }
                        #Farbe für Kategorie aus DB categories ermitteln. (category3)
                        $categfarbe3 = $zeile['category3'];
                        $sql2_3 = "SELECT color FROM categories WHERE category='$categfarbe3'";
                        $db_erg_farbe3 = mysqli_query($db_link, $sql2_3);
                        $db_erg_farbe_array3 = mysqli_fetch_array($db_erg_farbe3, MYSQLI_ASSOC);
                        if($db_erg_farbe_array3 != null){
                            $farbe3 = $db_erg_farbe_array3['color'];
                        }

                        echo "<tr style='border: 1px solid black; color: red;'>";
                            #echo "<td>". $zeile['id'] . "</td>";
                            echo "<td style='color: red; font-size: 22px'>&nbsp&nbsp&nbsp&nbspo</td>";
                            #echo "<td>". $zeile['done'] . "</td>";
                            echo "<td>". $zeile['bezeichnung'] . "</td>";
                            echo "<td>". $zeile['datum'] . "</td>";
                            echo "<td style='color: $farbe;'>". $zeile['category'] . "</td>";
                            echo "<td style='color: $farbe2;'>". $zeile['category2'] . "</td>";
                            echo "<td style='color: $farbe3;'>". $zeile['category3'] . "</td>";
                        echo "</tr>";
                       
                    }
                    else{
                        #farbe2 und farbe2 Standard auf schwarz stellen, da in Zeile 74 u. 75 immer benötigt wird.
                        $farbe2 = #000000;
                        $farbe3 = #000000;

                        #Farbe für Kategorie aus DB categories ermitteln. (category)
                        $categfarbe = $zeile['category'];
                        $sql2 = "SELECT color FROM categories WHERE category='$categfarbe'";
                        $db_erg_farbe = mysqli_query($db_link, $sql2);
                        $db_erg_farbe_array = mysqli_fetch_array($db_erg_farbe, MYSQLI_ASSOC);
                        $farbe = $db_erg_farbe_array['color'];
                        #Farbe für Kategorie aus DB categories ermitteln. (category2)
                        $categfarbe2 = $zeile['category2'];
                        $sql2_2 = "SELECT color FROM categories WHERE category='$categfarbe2'";
                        $db_erg_farbe2 = mysqli_query($db_link, $sql2_2);
                        $db_erg_farbe_array2 = mysqli_fetch_array($db_erg_farbe2, MYSQLI_ASSOC);
                        if($db_erg_farbe_array2 != null){
                            $farbe2 = $db_erg_farbe_array2['color'];
                        }
                        #Farbe für Kategorie aus DB categories ermitteln. (category3)
                        $categfarbe3 = $zeile['category3'];
                        $sql2_3 = "SELECT color FROM categories WHERE category='$categfarbe3'";
                        $db_erg_farbe3 = mysqli_query($db_link, $sql2_3);
                        $db_erg_farbe_array3 = mysqli_fetch_array($db_erg_farbe3, MYSQLI_ASSOC);
                        if($db_erg_farbe_array3 != null){
                            $farbe3 = $db_erg_farbe_array3['color'];
                        }

                        echo "<tr style='border: 1px solid black;'>";
                            #echo "<td>". $zeile['id'] . "</td>";
                            echo "<td style='color: red; font-size: 22px'></td>";
                            #echo "<td>". $zeile['done'] . "</td>";
                            echo "<td>". $zeile['bezeichnung'] . "</td>";
                            echo "<td>". $zeile['datum'] . "</td>";
                            echo "<td style='color: $farbe;'>". $zeile['category'] . "</td>";
                            echo "<td style='color: $farbe2;'>". $zeile['category2'] . "</td>";
                            echo "<td style='color: $farbe3;'>". $zeile['category3'] . "</td>";
                        echo "</tr>";
                    }
                }
            echo "</table>";
            
            mysqli_free_result( $db_erg );
            
        ?>

    </body>
</html>