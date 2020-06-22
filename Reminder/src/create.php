<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Reminder - Creating</title>
    </head>
    <body>
    <?php
        $db_link = mysqli_connect('db', 'admin', 'pw', 'reminder', 3306);

        $bez = $_POST["bez"];
        $date = $_POST["date"];  
        $kategorie = $_POST["category"];    
        $kategorie2 = $_POST["category2"];    
        $kategorie3 = $_POST["category3"];          

        $sql = "INSERT INTO remind2 (bezeichnung , datum , done, category, category2, category3) VALUES ('$bez', '$date', '0', '$kategorie', '$kategorie2', '$kategorie3')";
        $db_erg = mysqli_query($db_link, $sql);


       #Kategorie checken + evtl anlegen (category)
        #Kategorie vorhanden?
        $sql2 = "SELECT category FROM categories";
        $db_erg2 = mysqli_query($db_link, $sql2);

        $merker = 0;    #bleibt in nachfolgendem while-if 0, wenn eingegebene Kategorie nicht in DB vorhanden.

        while ($zeile = mysqli_fetch_array($db_erg2, MYSQLI_ASSOC)){
            if($zeile['category'] == $kategorie){
                $merker = 1;
            }
        }

        #Kategorie ggf. anlegen
        if($merker == 0){
            // Zufalls-Farbwerte ausgeben 
            #for ($anzeige = 1; $anzeige <= 10; $anzeige++) { 
                $zufallsfarbe = "#"; 
                $farbe = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F");
            
                for ($zaehler = 0; $zaehler < 6; $zaehler++) { 
                    $zufallIndex = array_rand($farbe); 
                    $zufallsfarbe .= $farbe[$zufallIndex]; 
                }
            #}
            
            #echo "Farbe = ".$zufallsfarbe;

            $sql3 = "INSERT INTO categories (category, color) VALUES ('$kategorie', '$zufallsfarbe')";
            $db_erg3 = mysqli_query($db_link, $sql3);

        }
        
       #Kategorie checken + evtl anlegen (category2)
        #Kategorie vorhanden?
        $sql2 = "SELECT category FROM categories";
        $db_erg2 = mysqli_query($db_link, $sql2);

        $merker = 0;    #bleibt in nachfolgendem while-if 0, wenn eingegebene Kategorie nicht in DB vorhanden.

        while ($zeile = mysqli_fetch_array($db_erg2, MYSQLI_ASSOC)){
            if($zeile['category'] == $kategorie2){
                $merker = 1;
            }
        }

        #Kategorie ggf. anlegen
        if($merker == 0){
            // Zufalls-Farbwerte ausgeben 
            #for ($anzeige = 1; $anzeige <= 10; $anzeige++) { 
                $zufallsfarbe = "#"; 
                $farbe = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F");
            
                for ($zaehler = 0; $zaehler < 6; $zaehler++) { 
                    $zufallIndex = array_rand($farbe); 
                    $zufallsfarbe .= $farbe[$zufallIndex]; 
                }
            #}
            
            #echo "Farbe = ".$zufallsfarbe;

            $sql3 = "INSERT INTO categories (category, color) VALUES ('$kategorie2', '$zufallsfarbe')";
            $db_erg3 = mysqli_query($db_link, $sql3);

        }

       #Kategorie checken + evtl anlegen (category3)
        #Kategorie vorhanden?
        $sql2 = "SELECT category FROM categories";
        $db_erg2 = mysqli_query($db_link, $sql2);

        $merker = 0;    #bleibt in nachfolgendem while-if 0, wenn eingegebene Kategorie nicht in DB vorhanden.

        while ($zeile = mysqli_fetch_array($db_erg2, MYSQLI_ASSOC)){
            if($zeile['category'] == $kategorie3){
                $merker = 1;
            }
        }

        #Kategorie ggf. anlegen
        if($merker == 0){
            // Zufalls-Farbwerte ausgeben 
            #for ($anzeige = 1; $anzeige <= 10; $anzeige++) { 
                $zufallsfarbe = "#"; 
                $farbe = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F");
            
                for ($zaehler = 0; $zaehler < 6; $zaehler++) { 
                    $zufallIndex = array_rand($farbe); 
                    $zufallsfarbe .= $farbe[$zufallIndex]; 
                }
            #}
            
            #echo "Farbe = ".$zufallsfarbe;

            $sql3 = "INSERT INTO categories (category, color) VALUES ('$kategorie3', '$zufallsfarbe')";
            $db_erg3 = mysqli_query($db_link, $sql3);

        }



        #header('location: index.php');

        echo "<script type='text/javascript'>window.top.location='index.php';</script>"; exit;
    ?>

</body>
</html>