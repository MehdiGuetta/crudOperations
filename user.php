<?php

include 'connect.php';

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $password= $_POST['password'];

    $sql = "INSERT INTO `crud` (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password')";

    $result = mysqli_query($con, $sql);
    if($result){
        // echo 'data inserted successfully';
        header('location:index.php');
    } else {
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud op</title>
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100vh;
    background-color: #999;
}

.container{
    width: 700px;
    height: auto;
    background-color: #fff;
    border-radius: 10px;
    border: 3px solid #eee;
}

.container form{
    display: flex;
    flex-direction: column;
    margin: 40px 60px;
}

.container form input{
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #888;
    outline: none;
    border-radius: 5px;
}
::placeholder{
    color: #888;
}

.container form input:focus{
    border: 2px solid #0080ff;

}

.container form label{
    margin-bottom: 5px;
}

.container form button{
    background-color: #0080ff;
    color: #fff;
    padding: 10px 20px;
    outline: none;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    font-size: 16px;
    width: 100px;
}
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your Email">
            <label for="phone">Mobile:</label>
            <input type="tel" id="phone" name="mobile" placeholder="Enter your mobile">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
            <button name="submit">Submit</button>
        </form>
    </div>


</body>
</html>