<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <br>
        <br>
        <h2>List of Clients</h2>
        <br>
        <a class="btn btn-primary" href="/myshop/AddClient.php">Add New Client</a>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Database connection parameters
                // $servername = "localhost";
                //$username = "root";
                //$password = "";
                //$dbname = "myshop";

                // Create connection
                $connection = new mysqli("localhost","root","1234", "myshop");

                // Check connection
                if ($connection->connect_error) {
                    die("Connection failed: " . $connection->connect_error);
                }

                // SQL query to retrieve data from the clients table
                $sql = "SELECT * FROM clients";
                $result = $connection->query($sql);

                // Check if the query was successful
                if (!$result) {
                    die("Query failed: " . $connection->error);
                }

                // Fetch and display data in table rows
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['phone']}</td>
                            <td>{$row['address']}</td>
                            <td>{$row['created_at']}</td>
                            <td>
                                <a class='btn btn-primary btn-sm' href='/myshop/edit.php?id={$row['id']}'>Edit</a>
                                <a class='btn btn-danger btn-sm' href='/myshop/delete.php?id={$row['id']}'>Delete</a>
                            </td>
                          </tr>";
                }

                // Close the database connection
                $connection->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
