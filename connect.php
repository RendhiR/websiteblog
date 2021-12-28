<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM artikel";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
        <table class="table table-dark table-hover">
            <tr >
                <td>kode</td>
                <td>Nama</td>
                <td>Harga</td>
                <td>keterangan</td>
                <td colspan="2"></td>
            </tr>

            <?php
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row["kode"] ?></td>
                    <td><?php echo $row["nama"] ?></td>
                    <td><?php echo $row["Harga"] ?></td>
                    <td><?php echo $row["keterangan"] ?></td>
                    <td><button type="button" class="btn btn-primary"onclick="window.location.href='edit.php?id=<?php echo $row["ID"] ?>';">edit</button></td>
                    <td><button type="button" class="btn btn-primary"onclick="deleteData(<?php echo $row["ID"] ?>)">delete</button></td>
                </tr>
            <?php
            }
            ?>

        </table>
    <?php
    } else {
        echo "0 results";
    }
    $conn->close();

    ?>