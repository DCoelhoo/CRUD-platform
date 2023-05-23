<?php
    
    function ligardb(){
        $servername = "localhost";
        $username = "root";
        $password = "usbw";
        $db_name = "crud";

        // Create connection
        global $conn;

        $conn = new mysqli($servername, $username, $password, $db_name);

        // Check connection
        if ($conn->connect_error) {
        die(debug("Connection failed: " . $conn->connect_error));
        }

        debug("Connected successfully");

    }
    
    
    function debug($data) {
                $output = $data;
            if (is_array($output))
                $output = implode(',', $output);

            echo "<script>console.log('Debug: " . $output . "' );</script>"; 
    }
?>