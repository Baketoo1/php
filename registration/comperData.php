<?php
$connection = mysqli_connect("localhost", "root", "", "rezervace_database");
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["od_kdy"]) && isset($_POST["do_kdy"])) {
        $od_kdy = $_POST["od_kdy"];
        $do_kdy = $_POST["do_kdy"];

        $query = "SELECT * FROM `order`";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Error: " . mysqli_error($connection));
        }

        while ($row = mysqli_fetch_assoc($result)) {
            if ($do_kdy == $row["since_when"]) {
                print_r("Yess");
            }
        }
    } else {
        echo "Chyba: Klíče 'od_kdy' a/nebo 'do_kdy' nejsou definovány v poli \$_POST.";
    }
}

mysqli_close($connection);
?>