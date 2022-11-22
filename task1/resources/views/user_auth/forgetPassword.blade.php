<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot password</title>
    <link rel="stylesheet" type="text/css" href="forget_password.css" >
    <style>
        body{
            background-color: black;
        }
        div{
            width: 30%;
            height: 70%;
            text-align: center;
            margin-left:  35%;
        }
        input,h1,p,button,label{
            width: 100%;
            border: 0;

            margin-left: 0;
        }
        label{
            text-align: left;
            float: left;
            height: 90px;
            color: #7f7b73;
            overflow: hidden;
            font-size: 10px;
        }
        input{
            height: 50px;
            background-color: #1a1a1a;
            padding-left: 20px;
            max-width: 100%;
            font-size: 10px;
            margin-top: 5px;
        }
        h1{
            color: #efefef ;
        }
        p{
            color: #7f7b73;
            margin-bottom: 40px;
        }
        .b1{
            color: black;
            background-color: #efefef ;
            height: 50px;
            font-size: 17px;
            margin-bottom: 50px;
            font-weight: bold;
        }
        .b2{
            margin-bottom: 30px;
        }
        .b2 , .b3{
            height: 50px;
            background-color: black;
            border: 1px solid #efefef;
            color: #efefef;
            font-size: 17px;
            letter-spacing: 3px;
        }
        a{
            text-decoration: none;
            color: #efefef;
        }
    </style>

</head>
<body>

<div>
    <h1>forgot password</h1>
    <p>it's all ok. we'll send you a reminder email.</p>

    <label>your email<input placeholder="email" type="email"></label>

    <button class="b1" type="submit">send now</button>

    <button class="b2"><a href="{{ route('Route_login') }}">login</a></button>
    <button class="b3"><a href="{{ route('Route_register') }}">create account</a></button>
</div>

</body>
</html>
