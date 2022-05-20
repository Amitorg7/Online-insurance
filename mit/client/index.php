<?php
session_start();

if(isset($_SESSION["username"])){
	header("Location: home.php");
	}
?>

<head>
    <style>
    body {
        background-image: url(bg1.jpg);
    }

    .container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

    }

    .login-page {
        width: 360px;
        padding: 8% 0 0;
        margin: auto;
    }

    .form {
        border-radius: 30px;
        padding-top: 30px;
        position: relative;
        z-index: 1;
        background: rgb(62 94 62 / 60%);
        max-width: 349px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    .form input {
        border-radius: 10px;
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
    }

    .form button {
        border-radius: 10px;
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #134c16;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
    }

    .form button:hover,
    .form button:active,
    .form button:focus {
        background: #43A047;
    }




    .imgs {
        margin-top: 0%;
        margin-left: 34%;
        weight: 20%;
        height: 20%;


    }
    </style>
    <title>Login Page</title>
</head>
<!-- <img class="imgs" src="bg.jpg" alt="Login Logo"> -->
<div class="container">
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="login.php" method="POST">
                <input type="text" name="username" id="" placeholder="username" />
                <input type="password" name="password" id="" placeholder="password" />
                <button>login</button>
            </form>
        </div>
    </div>
</div>