<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
        <h1>Dynamic Website</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">Products</a>
            <a href="#">Contact</a>
        </nav>
    </header>
    <div class="container">
        <div class="content">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "dynamic_database";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Product Name</th><th>Price</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["id"]."</td><td>".$row["product_name"]."</td><td>".$row["price"]."</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </div>
    </div>
    </div>
    <footer>
        &copy; <?php echo date("Y"); ?> Hardeeep Singh . All rights reserved.
    </footer>
</body>
</html>

