<?php
    session_start();
    $_SESSION['logged_in'] = false;

    $host="localhost";
    $user="root";
    $password="";
    $db="stackprobe";
    $conn = mysqli_connect($host,$user,$password, $db);

    if($conn)
    {
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            if(isset($_POST['uname']) && isset($_POST['psw']))
            {
                $uname=$_POST['uname'];
                $pass=$_POST['psw'];
                
                $sql="select * from cred where user_name='$uname' AND password='$pass' limit 1";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)==1)
                {
                    $_SESSION['uname'] = $uname;
                    $_SESSION['logged_in'] = true;

                    header("Location: index.php");
                }
                else
                {
                    echo 'access denied.';
                    exit();
                }
                
            }
        }
        
    }

    
?>



