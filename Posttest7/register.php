<?php
    session_start();
    require './CRUD DB/konek.php';

    if(isset($_SESSION['login'])){
        header("Location: home.php");
        exit;
    }

    if(isset($_POST['btn'])){
        $email=$_POST['email'];
        $username=$_POST['username'];
        $pass=$_POST['pass'];
        $cpass=$_POST['cpass'];

        // cek username udah digunakan apa belum

        $sql = "SELECT * FROM akun where username='$username'";
        $user = $db->query($sql);

        if (mysqli_num_rows($user)>0){
            echo "<script>
            alert('Username sudah digunakan, silahkan menggunakan username yang lain') </script> ";
        }
        else {
            if ($pass==$cpass){
                $pass=password_hash($pass, PASSWORD_DEFAULT);
                $query = "INSERT INTO akun (email, username, pass) VALUES ('$email', '$username','$pass')";
                $result=$db->query($query);
            
                if ($result){
                    echo "<script>
                        alert('Registrasi berhasil')
                        document.location.href='index.php';
                         </script> ";
                }
                else{
                    echo "<script>
                        alert('Registrasi gagal')
                         </script> ";
                }
                
            }
            else{
                echo "<script>
                        alert('Password konfimasi tidak sama dengan password')
                         </script> ";
            }
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
        <h1>REGISTER</h1>
        <form method="POST" action="">
        <div class="txt">
                <label for="">Email</label>
                <input type="text" name="email" required autocomplete="off">
            </div>
            <div class="txt">
                <label for="">Username</label>
                <input type="text" name="username" required autocomplete="off">
            </div>
            <div class="txt">
                <label for="">Password</label>
                <input type="password" name="pass" required>
            </div>
            <div class="txt">
                <label for="">Konfirmasi Password</label>
                <input type="password" name="cpass" required>
            </div>
            <input type="submit" name="btn" value="SUBMIT">
            <p>Sudah punya akun?
                <a href="index.php">Login</a>
            </p>
        </form>
    </div>
    
</body>
</html>