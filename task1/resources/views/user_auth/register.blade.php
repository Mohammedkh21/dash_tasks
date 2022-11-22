<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create account</title>
    <link rel="stylesheet" type="text/css" href="create.css" >
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
            color: #edf2f7;
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

    <form action="{{ route('account_register') }}" method="post" >
        @csrf
        <h1>create account</h1>
        <p>the new you!</p>


        <label>name <input name="name" placeholder="first name" type="text"></label>
        @error('name')
            <small style="color: red" id="emailHelp" class="form-text text-danger">{{$message}}</small>
        @enderror

        <label>your email<input name="email" placeholder="your email" type="email"></label>
        @error('email')
            <small style="color: red" id="emailHelp" class="form-text text-danger">{{$message}}</small>
        @enderror

        <label>your password<input name="password" placeholder="your password" type="password"></label>
        @error('password')
            <small style="color: red" id="emailHelp" class="form-text text-danger">{{$message}}</small>
        @enderror

        <label>confirm password<input name="confirm_password" placeholder="confirm password" type="password"></label>
        @error('confirm_password')
            <small style="color: red" id="emailHelp" class="form-text text-danger">{{$message}}</small>
        @enderror


        <button class="b1" type="submit">create account</button>

        <button class="b2"><a href="{{ route('Route_login') }}">have an account? login</a></button>
    </form>

</div>


</body>
</html>
