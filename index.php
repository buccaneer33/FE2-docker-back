 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name=Buccaneer content=Buccaneer>
<title>PHP</title>

<body>
    <main>
        <section>
            <div>
                <?php 
                    $servername = "db";
                    $username = "root";
                    $password = "root";
                    $dbname = "test";
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    $sql = "SELECT id, name, title FROM test";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["title"]. "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </div>
        </section>

    <section ></section>
    </main>
    <footer></footer>
</html>