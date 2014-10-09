<?php
if ($_GET["antal"] > 10) {
    echo "skriv ett tal under 10";
} 
else {
    $inmatning = $_GET;
    $lista = array("Anna", "Pelle", "Johan", "Anton", "Hanna", "Gabriel", "Rut", "Isak", "Kalle", "Fredrik");
    var_dump($lista);
    for ($i = 0; $i < $_GET["antal"]; $i++) {
        $slump = rand(0, 9);
//        echo $slump;
        $nummer = array();
        array_push($nummer, $slump);
    }
//    var_dump($nummer);
    
}
//var_dump($_GET);
//
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



