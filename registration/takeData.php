<?php
$rezervace = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jmeno = $_POST["jmeno"];
    $email = $_POST["email"];
    $telefon = $_POST["telefon"];
    $odKdy = $_POST["od_kdy"];
    $doKdy = $_POST["do_kdy"];
    $pokoje = $_POST["pokoje"];
    $pristylka = $_POST["pristylka"];
    
    $rezervace[] = array(
        "jmeno" => $jmeno,
        "email" => $email,
        "telefon" => $telefon,
        "odKdy" => $odKdy,
        "doKdy" => $doKdy,
        "pokoje" => $pokoje,
        "pristylka" => $pristylka
    );

    for ($i=0; $i < count($rezervace); $i++) { 
        foreach ($rezervace[$i] as $k => $v){
            echo "<br>" . $rezervace[$i][$k];
        }
    };
}
?>
