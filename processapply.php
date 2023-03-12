<!DOCTYPE html>
<html lang="en">
<!-- processclient.php
    For services.html
-->

<head>
    <title>Procesamiento de Clientes</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styles.css" />

</head>

<body>

    <h1>Form Processing</h1>
    <br />
    <hr />

    <?php
    // Extract the data from the form
    extract($_POST);

    // Connection with MySQL
    $conn = new mysqli("127.0.0.1", "root", "", "apply", 3306);

    if ($conn->connect_errno) {
        echo "Failed to connect to MYSQL: (" . $conn->connect_error . ")";
        exit;
    }

    // Build the query

    $query = "INSERT INTO APPOINTMENT(`FIRSTNAME`, `INITIAL`, `LASTNAME`, `EMAIL`, `SERVICE`, `PHONE`, `ADDRESS1`, `ADDRESS2`, `APARTMENT`, `CITY`, `COUNTRY`, `STATE`, `ZIP`, `SUBJECT`, `DESCRIPTION`, `FILE1`, `FILE2`) VALUES('$firstname', '$initial', '$lastname', '$email', '$service', '$phone', '$address1', '$address2', '$apartment', '$city', '$country', '$state', '$zip', '$subject', '$description', '$file1', '$file2');";
    trim($query);
    $query = stripslashes($query);

    // Ejecutar el query 

    if (!$conn->query($query)) {
        echo "Error the query could not be executed: " . $conn->connect_error;
    } else {
        echo "<h2>The record was registered for " . $firstname . " " . $lastname . ".</h2>";
    }
    ?>

</body>

</html>