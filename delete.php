<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Resources</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        .resources {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .resource {
            border: 1px solid #ccc;
            padding: 10px;
        }

        .resource img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .resource .actions {
            text-align: center;
        }

        .resource .actions a {
            margin-right: 10px;
            color: #007bff;
            text-decoration: none;
        }

        .resource .actions a:hover {
            text-decoration: underline;
        }

        .form-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
        }

        .form-container label {
            display: block;
            margin-bottom: 10px;
        }

        .form-container input[type="text"],
        .form-container textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }

        .form-container textarea {
            height: 100px;
        }

        .form-container input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <h1>Educational Resources</h1>

    <div class="resources">
        <?php
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "immunifylanka";


        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if form is submitted for adding a new resource
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $title = $_POST['title'];
            $description = $_POST['description'];
            // Placeholder for image file upload handling
            $image = "path_to_image"; // Replace with actual path to image file

            // Insert new resource into the database
            $sql = "INSERT INTO education (title, description, image) VALUES ('$title', '$description', '$image')";

            if ($conn->query($sql) === TRUE) {
                echo "<div>New resource added successfully.</div>";
            } else {
                echo "<div>Error: " . $sql . "<br>" . $conn->error . "</div>";
            }
        }

        // Retrieve data from the education table
        $sql = "SELECT * FROM education";
        $result = $conn->query($sql);

        // Check if there are any records in the result
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                // Display resource information
                echo "<div class='resource'>";
                echo "<h2>" . $row["title"] . "</h2>";
                echo "<img src='" . $row["image"] . "' alt='" . $row["title"] . "' />";
                echo "<p>" . $row["description"] . "</p>";
                echo "<div class='actions'>";
                echo "<a href='?action=update&id=" . $row["id"] . "'>Update</a>";
                echo "<a href='?action=delete&id=" . $row["id"] . "' onclick='return confirm(\"Are you sure you want to delete this resource?\");'>Delete</a>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "No educational resources available.";
        }

        // Close database connection
        $conn->close();
        ?>
    </div>

    </body>
</html>

        

