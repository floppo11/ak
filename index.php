<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AK site</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="POST" action="index.php">
        <h1>Zoek hier je info voor AK.</h1>
        <input type="text" class="user" name="naam" placeholder="hou het zo kort mogelijk">
        <input type="submit" value="KLIK">
    </form>
    <?php
        
        $db = "AARDRIJKSKUNDE";
        $ip = "localhost";
        $pw = "";
        $user = "root";
        $conn = new mysqli($ip, $user, $pw, $db);

        if (isset($_POST['naam'])) {
            $naam = $_POST["naam"];
            $query = "SELECT * FROM info WHERE informatie LIKE '%$naam%'";
            $result = $conn->query($query);

            echo "Hier zijn de resultaten";
            echo "<table>";
            for ($i = 0; $i < $result->num_rows; $i++) {
                $row = $result->fetch_assoc();
                echo "<tr><td>{$row['informatie']}</td></tr>";
            }

            echo "</table";
        }
    ?>   
    <form method="POST" action="index.php">
        <h1>Voeg iets toe.</h1>
        <input type="text" class="user" name="tv" placeholder="hou het zo kort mogelijk">
        <input type="submit" value="KLIK">
    </form>
    <?php
            $db = "AARDRIJKSKUNDE";
            $ip = "localhost";
            $pw = "";
            $user = "root";
            $conn = new mysqli($ip, $user, $pw, $db);

            if (isset($_POST['naam'])) {
                $tv = $_POST["tv"];
                $query = "INSERT INTO info VALUES (
                    "%$tv%"
                    )";
                $result = $conn->query($query);
    ?>
    
</body>
</html>