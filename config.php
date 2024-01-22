    <?php
    /* Database credentials. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'Jancaster123');
    define('DB_NAME', 'loginsystemdb');

    /* Attempt to connect to MySQL database */
    $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Check connection
    if($mysqli === false){
        die("ERROR: Could not connect. " . $mysqli->connect_error);
    } else {
        echo "Connection successful!\n";
        echo "Server info: " . mysqli_get_host_info($mysqli);
        // Your additional code can go here
    }
    ?>