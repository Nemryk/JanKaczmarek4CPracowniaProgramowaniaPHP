<!DOCTYPE html>
 <html lang="en">
     <meta charset="UTF-8">
     <head>
     </head>
     <body>
         <?php
         $name = "Anna";
         $surname = "JSON";
         echo "Imię: $name <br>";
         echo "Nazwisko: $surname <br>";
         //echo ' bottom text<br>';
         $prawda = true;
         $fałsz = false;
        $trol = <<<LABEL
        hirdok 
        <br>
        <hr>
        bottom text
        LABEL;
        echo $trol;
        echo <<<L
        <br>
        Imię: $name
        <br>
        L;
        //nowdoc
        $city = "Poznań";
        echo "Kamienie:  \$city, wartość: $city"
         ?>
     </body>
</html>