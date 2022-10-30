<?php
    session_start();
    require './CRUD DB/konek.php';

    if(isset($_SESSION['login'])){
        header("Location: home.php");
        exit;
    }

    if(isset($_POST['btn'])){
        $username=$_POST['username'];
        $pass=$_POST['pass'];

        $result= mysqli_query($db, "SELECT * FROM akun WHERE username='$username' OR email='$username'");

        if (mysqli_num_rows($result)>0){
            $row=mysqli_fetch_array($result);
            $username=$row['username'];
            if (password_verify($pass, $row['pass'])){
                $_SESSION['login']=true;
                echo "<script>
                        alert('Selamat datang $username');
                        document.location.href='home.php';
                         </script> ";
                exit;
            }
            else{
                echo "<script>
                        alert('Username dan Password anda salah');
                        document.location.href='index.php';
                         </script> ";
            }
            

        }
        else{
            echo "<script>
                        alert('Buat akun terlebih dahulu');
                        document.location.href='register.php';

                         </script> ";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            margin;0;
            padding:0;
            font-family: montserrat;
            background:skyblue;
            height:100vh;
            overflow:hidden;
        }
        .center{
            position:absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background:white;
            width:400px;
            border-radius:10px;
        }

        .center h1{
            text-align:center;
            padding: 0 0 20px 0;
            border-bottom: 1px solid;
            color:darkblue;
        }

        .center p{
            text-align:center;
            padding: 0 0 20px 0;
            /* border-bottom: 1px solid; */
            color:black;
        }

        .center p a{
            text-align:center;
            /* padding: 0 0 20px 0; */
            /* border-bottom: 1px solid; */
            color:darkblue;

        }
        

        .center form{
            padding:0 40px;
            box-sizing:border-box;
        }

        form .txt{
            position:relative;
            border-bottom:2px solid;
            margin:30px 0;
        }

        .txt input{
            width:100%;
            padding: 0 5px;
            height:30px;
            font-size:16px;
            border:none;
            background:none;
            outline:none;
        }

        .txt label{
            top:50px;
            left:5px;
            color:black;
            transform:translate(-50%);
            font-size:16px;
            pointer-events:none;
        }

        input[type="submit"]{
            width:100%;
            height:50px;
            border: 1px solid;
            background:darkblue;
            border-radius:25px;
            color:white;
            margin-bottom:20px;
            font-size:18px;
        }

    </style>
</head>
<body>
    <div class="center">
        <h1>LOGIN</h1>
        <form method="POST" action="">
            <div class="txt">
                <label for="">Username</label>
                <input type="text" name="username" required autocomplete="off">
            </div>
            <div class="txt">
                <label for="">Password</label>
                <input type="password" name="pass" required>
            </div>
            <input type="submit" name="btn" value="LOGIN">
            <p>Belum punya akun?
                <a href="register.php">Register</a>
            </p>
        </form>
    </div>
    
</body>
</html>