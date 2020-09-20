<?php
    session_start();
    $user = "root";
    $pass = "root";
    $server = "localhost";
    $db = "Evan";
    $conn = new mysqli($server,$user,$pass,$db);
    if($conn->connect_error)
    {
        die($conn->connect_error);
    }
    else
    {
        $sql = "SELECT * FROM Admin";
        $res = $conn->query($sql);
        while($row = $res->fetch_assoc())
        {
            if($row['user']==$_POST['usr'] && $row['pass']==$_POST['pass'])
            {
                $_SESSION['msg'] = 'logged';
                break;
            }
        }
    }
    if(isset($_SESSION['msg']))
    {
        echo "Login Successful<br>";
    }
    else
    {
        echo "Invalid username or password";
        Sleep(5);
        header('Location:10-1.php');
    }
?>
