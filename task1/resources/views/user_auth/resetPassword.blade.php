<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot password</title>
    <link rel="stylesheet" type="text/css" href="forget_password.css" >
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

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
    <div style="display: none; " class="alert alert-success done"></div>
    <form   id="sendForm">
        @csrf

        <input name="token" type="hidden"  value="{{ $token }}" >
        <label>your new password<input name="password" placeholder="your password" type="password"></label>
        <label>your new password<input name="password_confirm" placeholder="your password" type="password"></label>
        @error('password_confirm')
            <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
        @enderror

        <button id="sendButton" class="b1" type="submit">send now</button>
    </form>

    <button class="b2"><a href="{{ route('Route_login') }}">login</a></button>
    <button class="b3"><a href="{{ route('Route_register') }}">create account</a></button>
</div>

</body>
<script>


    $(document).on('click', '#sendButton', function (e) {
        e.preventDefault();

        var formData = new FormData($('#sendForm')[0]);


        $.ajax({
            type: 'post',
            enctype: 'multipart/form-data',
            url: "{{ route('setNewPassword') }}",
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            success: function (data) {

                if (data.status  ) {
                    $('.done').html('password changed <a href="{{ route('Route_login') }}"> login</a>');
                    $('.done').css('color','white');
                    $('.done').show();
                }

            }, error: function (reject) {
                console.log(reject);
                $('.done').text(reject.responseJSON.message);
                $('.done').css('color','red');
                $('.done').show();
            }
        });
    });

</script>
</html>
