<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css\product.css'>
</head>
<body>
    <div class="background-radial-gradient overflow-hidden">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "noPassword";

                //Create connection
                $conn = new mysqli($servername, $username, $password);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                //Create Database
                $sql = "CREATE DATABASE IF NOT EXISTS OnlineStore;";
                if (!$conn->query($sql)) { echo "Error creating database." . $conn->connect_error; }
                $conn->select_db('OnlineStore');

                $sql = "DROP TABLE IF EXISTS PRODUCTS;
                DROP TABLE IF EXISTS USERS;";

                $sql .= "CREATE TABLE IF NOT EXISTS PRODUCTS (
                Id INT(6) UNSIGNED AUTO_INCREMENT,
                Pname VARCHAR(30) NOT NULL, 
                Price INT(15) NOT NULL,
                In_stock INT UNSIGNED NOT NULL,
                PRIMARY KEY (Id)
                );
                
                CREATE TABLE IF NOT EXISTS USERS (
                Id INT(6) UNSIGNED AUTO_INCREMENT,
                Username VARCHAR(30) NOT NULL,
                Password VARCHAR(25) NOT NULL,
                Email VARCHAR(30) NOT NULL,
                Membership VARCHAR(1) NOT NULL,
                PRIMARY KEY (Id)
                );
                
                INSERT INTO products (Pname, Price, In_stock)
                VALUES ('Mercedes',30000,5), ('Tesla',60000,12), ('Vulcan',75000,3);
                
                INSERT INTO users (Username, Password, Email, Membership)
                VALUES ('DucatiMeme123', 'placeholder', 'DucatiMeme123@gmail.com', 'G');

                SELECT * FROM PRODUCTS;
                ";
                
                if ($conn -> multi_query($sql)) {
                    do {
                        if ($result = $conn -> store_result()) {
                            echo "<table>";
                            echo "<tr>";
                            echo "<th> ID </th>";
                            echo "<th> Name </th>";
                            echo "<th> Price </th>";
                            echo "<th> Available </th>";
                            echo "</tr>";
                            while ($row = $result -> fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['Id'] . "</td>";
                                echo "<td>" . $row['Pname'] . "</td>";
                                echo "<td>" . $row['Price'] . "</td>";
                                echo "<td>" . $row['In_stock'] . "</td>";
                                echo "</tr>";
                            }
                            $result -> free_result();
                            if ($conn -> more_results()) {
                                printf("-------------\n");
                            }
                            echo "<table>";
                            echo "<br>";
                        }
                    } while ($conn->next_result());
                    
                }

                $conn->close();
            ?>
        </div>
    </div>
    
</body>
</html>