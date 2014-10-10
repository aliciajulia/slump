<?php
if ($_GET["antal"] > 10) {
    echo "skriv ett tal under 10";
} else {
    $inmatning = $_GET;
    $lista = array("Anna", "Pelle", "Johan", "Anton", "Hanna", "Gabriel", "Rut", "Isak", "Kalle", "Fredrik");

    //Slumpa så många nummer som den skrev in
    //Läs de slumpade nummren som platser i namnarrayen
    function slumpa($funklista, $antal) {

        $nummer = array();
        for ($i = 0; $i < $antal; $i++) {
            $slump = rand(0, sizeof($funklista) - 1);
//            echo $funklista[$slump];

            array_splice($funklista, $slump, 1);
            array_push($nummer, $funklista[$slump]);
        }
        return $nummer;
    }

    function skrivut($svar) {
        foreach ($svar as $name) {
            echo $namn;
        }
    }

    slumpa($lista, $_GET["antal"]);
    echo {$slumpa};
    skrivut($svar);
}
?>


<html>
    <head>
        <title>Slump</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <form>
            <input type="number" value="1" name="antal">
            <input type="submit">
        </form>
    </body>
</html>



