<?php

    include('db.php');   //The db.php contains the data base conection

    if(isset($_POST['save_task'])){  //This line verify if it has been sent a HTTP POST query, it's normal to use a form with a send's botton within the atribute name="save_task."
        $title = $_POST['title'];
        $description = $_POST['description']; //Similar to the previous line, this assignment gets the value of the "description" field sent via the POST request and stores it in the $description variable.
        $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')"; //This line creates an SQL query string to insert the values ​​captured in the $title and $description variables into the "task" table.
        $result = mysqli_query($conn, $query); //Here, the mysqli_query() function executes the SQL query defined in the $query variable. The connection to the database is established by the $conn variable, which is assumed to be defined in the "db.php" file.

        if(!$result){
            die("Query Failed");
        }; //This line checks if the SQL query was executed successfully. If the $result variable is false (indicating that the query failed), the message "Query Failed" is printed and the script is stopped by the die() function. This is useful for catching errors in the query and debugging problems.

        $_SESSION['message'] = 'Task Saved Successfully';
        $_SESSION['message_type'] = 'success';

        header("Location: index.php"); //Finally, this line redirects the user to the "index.php" page after the task's insertion into the database is complete.
    };

?>