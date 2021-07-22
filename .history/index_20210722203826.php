<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-paskaita PHP</title>
    <style>
    </style>
</head>
<body>
    
    <!-- PHP koda -->
       
    <!-- dokumentas yra pavadintas index.html arba index.php -->

    <p>Labas, sitas dokumentas yra lokaliame serveryje</p>
    <?php 
        //Kintamieji

        $skaicius = 5;
        $tekstas = "Tekstas";
        $sk = 5.5;
        $tiesa = true;
        $melas = false;


        echo $skaicius,;
        echo $tekstas;
        echo $sk;
        echo $tiesa; //vizualiai nebus atvaizduojamas
        echo $melas; //vizualiai nebus atvaizduojamas

        echo "Labas, sitas tekstas parasytas su PHP pagalba";
        echo "Kitas tekstas pasrasytas PHP pagalba";
    ?>     


    <script>

        var kintamasis;
        kintamasis = 5;
        "use strict";
        console.log("labas");
    </script>
</body>
</html>