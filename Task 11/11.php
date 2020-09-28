<!DOCTYPE html>
<body>
    <?php
       $user = "root";
    $pass = "root";
    $server = "localhost";
    $db = "Evan";
    $conn = new mysqli("localhost","root","root","Evan");
        if($conn->connect_error)
        {   
            die ("Sorry! Something went wrong".$conn->connect_error);
        }
        $conn->query($sql);
        $sql = $conn->prepare("insert into electronics Values(?,?,?,?)");
        $sql->bind_param("isis",$_POST['pd'],$_POST["pn"],$_POST["prc"],$_POST["feat"]);
        $sql->execute();
        echo "Data inserted successfully<br>";
        echo "Here is your data<br>";
        echo "<table>
            <tr>
                <td>".$_POST['pd']."</td>"
                ."<td>".$_POST['pn']."</td>"
                ."<td>".$_POST['prc']."</td>"
                ."<td>".$_POST['feat']."</td>"
           ."</tr>
        </table>";
        $conn->close();
    ?>
</body>
</html>
