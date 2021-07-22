
    <?php 
        echo "labas";
        $skaicius = 4;
    
     
        //Kintamieji

        $tekstas = "Tekstas";
        $sk = 5.5;
        $tiesa = true;
        $melas = false;


        echo $skaicius,$tekstas,$sk; // error?
        //Tarpas tarp kintamuju?
        //Javascript +; tekstas + " " + tekstas = tekstas tekstas
        // Noriu kelti i kita eilute? <br>
        echo $skaicius.",".$tekstas.",".$sk;
        echo "<br>";
        echo $skaicius,",",$tekstas,",",$sk;
        
        echo $tiesa; //vizualiai nebus atvaizduojamas
        echo $melas; //vizualiai nebus atvaizduojamas

        echo "<br>";
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