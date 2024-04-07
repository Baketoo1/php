<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["pokoje"])) {
        echo"Vybere pokoj";
        header("Location: index.php");
        exit();
    }

    $jmeno = $_POST["jmeno"];
    $email = $_POST["email"];
    $telefon = $_POST["telefon"];
    $odKdy = $_POST["od_kdy"];
    $doKdy = $_POST["do_kdy"];
    $pokoje = isset($_POST["pokoje"]) ? $_POST["pokoje"] : array();
    $pristylka = isset($_POST["pristylka"]) ? $_POST["pristylka"] : array();

    $room1_value = in_array('pokoj1', $pokoje) ? 1 : 0;
    $room2_value = in_array('pokoj2', $pokoje) ? 1 : 0;
    $room3_value = in_array('pokoj3', $pokoje) ? 1 : 0;
    $room4_value = in_array('pokoj4', $pokoje) ? 1 : 0;
    $room5_value = in_array('pokoj5', $pokoje) ? 1 : 0;

    $extra_bad1 = in_array('pro_pokoj1', $pristylka) ? 1 : 0;
    $extra_bad2 = in_array('pro_pokoj2', $pristylka) ? 1 : 0;
    $extra_bad3 = in_array('pro_pokoj3', $pristylka) ? 1 : 0;
    $extra_bad4 = in_array('pro_pokoj4', $pristylka) ? 1 : 0;
    $extra_bad5 = in_array('pro_pokoj5', $pristylka) ? 1 : 0;

    $connection = mysqli_connect("localhost", "root", "", "rezervace_database");
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "INSERT INTO `order` (username, email, tel_number, since_when, until_when, room1, room2, room3, room4, room5, extra_bed1, extra_bed2, extra_bed3, extra_bed4, extra_bed5) VALUES ('$jmeno', '$email', '$telefon', '$odKdy', '$doKdy', '$room1_value', '$room2_value', '$room3_value', '$room4_value', '$room5_value', '$extra_bad1', '$extra_bad2', '$extra_bad3', '$extra_bad4', '$extra_bad5')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Error: " . mysqli_error($connection));
    }

    mysqli_close($connection);

    header("Location: index.php");
    exit();
}
?>