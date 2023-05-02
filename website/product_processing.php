<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='\view\css\product.css'>
</head>
<body>
    <div class="container px-20 py-20 background-radial-gradient overflow-hidden">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <?php
                include 'db_conn_DEP.php';
                $sql = 'SELECT * FROM PRODUCT;';

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
                                echo "<td>" . $row['Product_name'] . "</td>";
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