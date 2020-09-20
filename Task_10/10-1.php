<?php
    session_start();
    if($_POST['lg'])
        unset($_SESSION['msg']);
    if($_SESSION['msg']=='logged' && !$_POST['lg'])
    {
        echo "Already logged in<br>";
        echo "<html><body>
        <form method='post' action='10-1.php'>
        <input type='submit' name='lg' value='Log Out'>
        </form>
        </body></html>";
    }
    else
    {
         echo "<html><body>
        <form method='post' action='10-2.php'>
        User Name:
        <input ype='text' name='usr'><br>
        Password:
        <input type='password' name='pass'><br>
        <input type='submit' name='lgi' value='Log In'>
        </form>
        </body></html>";
    }
?>
