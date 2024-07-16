<?php
        // Connect to the MySQL database
        // mysqli_connect(server, username, password, database)
        $con = mysqli_connect("localhost", "root" , "", "API_DATA");

        // Initialize an empty array to store the response
        $response = array();

        // Variable to keep track of array index
        $i = 0;

        // Check if the connection was successful
        if($con){
            // SQL query to select all data from the "data" table
            $sql = "SELECT * FROM data";

            // Execute the SQL query and store the result
            $result = mysqli_query($con, $sql);

            // Check if the query execution was successful
            if($result) {
                // Set the content type of the response to JSON
                header("Content-Type: application/json");

                // Fetch data from the result set row by row
                while($row = mysqli_fetch_assoc($result)){
                    // Assign the fetched data to the response array
                    $response[$i]['id'] = $row['id'];
                    $response[$i]['name'] = $row['name'];
                    $response[$i]['age'] = $row['age'];
                    $response[$i]['email'] = $row['email'];

                    // Increment the index for the next iteration
                    $i++;
                }

                // Encode the response array into JSON format and print it
                echo json_encode($response, JSON_PRETTY_PRINT);
            }
        } else {
            // If the connection failed, print an error message
            echo "Connection failed";
        }
?>


 