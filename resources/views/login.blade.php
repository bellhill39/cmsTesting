<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>TIMS-Login</title>

    <style>

        body {
            margin: 0;
            padding:0;
            /*background: url(login.jpg);*/
            background-color: #1d2124;
            background-size: cover;
            background-position: center;
            font-family: sans-serif;
        }

        .loginbox {
            width: 320px;
            height: 420px;
            background: #fff;
            /*    background: rgba(0,0,0,0.5);*/
            color: #000;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%,-50%);
            box-sizing: border-box;
            padding: 70px 30px;
        }

        .avatar{
            width:100px;
            height: 100px;
            border-radius: 40%;
            position: absolute;
            left: calc(80% - 50px);
            top: -1%;

        }

        h1{
            margin: 0;
            padding: 0 0 20px;
            text-align:left;
            font-size: 22px;
            position:sticky;
        }

        .loginbox p {
            margin: 0;
            padding: 0;
            font-weight: bold;
        }

        .loginbox input{
            width:100%;
            margin-bottom: 20px;

        }

        .loginbox input [type = "text"], input [type = "password"]{
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color:#fff;
            font-size: 16px;

        }

        .loginbox input[type ="submit"]
        {
            border: none;
            outline:none;
            height: 40px;
            background: #FF9311;
            color: #fff;
            font-size: 18px;
            border-radius: 20px;

        }


        .loginbox input[type ="submit"]:hover
        {
            cursor: pointer;
            background: #e54a42;
            color: #000;
        }
        .loginbox a {
            text-decoration: none;
            font-size: 12px;
            line-height: 20px;
            color: darkgray;
        }



    </style>

</head>
<body>

<div class="loginbox">

    <h1>Login </h1>
    <form>
        <p>User name</p>
        <input type="text" name="" placeholder="Enter username">
        <p>Password</p>
        <input type="password" name="" placeholder="Type password">
        <input type="submit" name="" value="Login">
        <a href="#">Lost your password</a><br>



    </form>

</div>


</body>


</html>