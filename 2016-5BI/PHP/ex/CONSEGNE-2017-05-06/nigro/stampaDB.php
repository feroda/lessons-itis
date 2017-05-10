<?php
require'header1.php';
$title="commeti";
require'header2.php';

//Crea una connessione diretta al database tramite socket TCP
$servername = "localhost";
$username = "giuseppe";
$password = "giuseppe";
$dbname = "db_esercitazione";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM persone";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>username</th><th>Nome</th><th>colori</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["username"]."</td><td>".$row["name"]." ".$row["surname"]."</td><td>".$row["colors"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

<?php
   include("footer.php");



?>
</body>
</html>
