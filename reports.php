<!DOCTYPE html>
<html lang="en">
<!-- reports.php
-->

<head>
    <title>Appointment Report</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styles.css" />

</head>

<body>

    <center>
        <h1>Contact Appointments Reports</h1>
    </center>
    <br />
    <hr />
    <?php

    // Coneccion con MySQL
    $conn = new mysqli("127.0.0.1", "root", "", "apply", 3306);

    if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: (" . $conn->connect_error . ")";
        exit;
    }

    // Construir el query
    $sql = "SELECT * FROM `APPOINTMENT`";
    //$query = "SELECT NUMEST, APELLIDOS, NOMBRE, CELULAR FROM estudiantes";

    // Ejecutar el query

    $result = $conn->query($sql);

    $rows = $result->num_rows;
    if ($rows > 0) {
        // output data of each row
        echo "<table class=\"report_table\">
        <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Service</th>
        <th>Address</th>
        <th>Apartment</th>
        <th>City</th>
        <th>Country</th>
        <th>State</th>
        <th>ZIP</th>
        <th>Subject</th>
        <th>Description</th>
        <th>Files</th>
        </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr class=\"report_table_internal\">
            <td>" . $row["FIRSTNAME"] . " " . $row["LASTNAME"] . "</td>" .
                "<td>" . $row["PHONE"] . "</td>" .
                "<td>" . $row["EMAIL"] . "</td>" .
                "<td>" . $row["SERVICE"] . "</td>" .
                "<td>" . $row["ADDRESS1"] . ", " . $row["ADDRESS2"] . "</td>" .
                "<td>" . $row["APARTMENT"] . "</td>" .
                "<td>" . $row["CITY"] . "</td>" .
                "<td>" . $row["COUNTRY"] . "</td>" .
                "<td>" . $row["STATE"] . "</td>" .
                "<td>" . $row["ZIP"] . "</td>" .
                "<td>" . $row["SUBJECT"] . "</td>" .
                "<td>" . $row["DESCRIPTION"] . "</td>" .
                "<td> <img src=\"" . $row["FILE1"] . "\"/>" . $row["FILE1"] . "<img src=\"" . $row["FILE2"] . "\"/>" . $row["FILE12"] . "</td>" .
                "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();

    ?>

</body>

</html>