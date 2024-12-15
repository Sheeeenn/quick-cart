<?php

$message ='';

require("codes/database/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = htmlspecialchars($_POST['firstname'], ENT_QUOTES, 'UTF-8');
    $lname = htmlspecialchars($_POST['lastname'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
    $c_password = htmlspecialchars($_POST['c_password'], ENT_QUOTES, 'UTF-8');
    $randID = random_int(10000000000, 99999999999);
    $userID =  $randID;
    $role = "Regular";

    if ($password == $c_password) {

        $prep = $conn->prepare("INSERT INTO users (Username, Password, Email, UserID, role, FirstName, LastName) VALUES (?, ?, ?, ?, ?, ?, ?)");

        if ($prep === false) {
            die("Error preparing the query: " . $conn->error);
        }

        $prep->bind_param("sssisss", $username, $password, $email, $userID, $role, $fname, $lname);
        $prep->execute();
        $prep->close();

        //session_start();
        //$_SESSION["UserID"] = $userID;
        header("location: /login");
    } else {
        $message = 'Wrong Email or Password!';
    }
}

$conn->close();
?>