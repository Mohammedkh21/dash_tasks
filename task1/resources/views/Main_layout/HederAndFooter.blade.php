
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script   src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/jquery-3.6.0.min.js')  }}"></script>
    <link rel="stylesheet"  href="{{ \Illuminate\Support\Facades\URL::asset('MainPage/bootstrap.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{ \Illuminate\Support\Facades\URL::asset('MainPage/main.css')  }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script >
        $(document).ready(function(){
            $("#login-modal").hide();
            $("#closeLogin").click(function(){
                $("#login-modal").hide();
            });
            $("#loginIcon").click(function(){
                $("#login-modal").show();
            });
        });
        $(document).on('click', '#sendButton', function (e) {
            e.preventDefault();
            var formData = new FormData($('#sendForm')[0]);


            $.ajax({
                type: 'post',
                enctype: 'multipart/form-data',
                url: "{{ route('account_login') }}",
                data: formData ,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {


                    $('.login_result').html(data.message);
                    $( ".login_result" ).removeClass( 'alert-danger').addClass( 'alert-success');
                    $('.login_result').show();
                    setTimeout(() => {  }, 300);
                    window.location.href = "{{route('Main')}}";
                }, error: function (reject) {

                    $('.login_result').html(reject.responseJSON.message);
                    $( ".login_result" ).removeClass( 'alert-success').addClass( 'alert-danger');
                    $('.login_result').show();
                }
            });
        });
    </script>
</head>
<body >
<div   class="modal fade show" id="login-modal" style="z-index: 1040; display: block; padding-right: 17px;background: rgba(0,0,0,0.5);" aria-modal="true">
    <div class="modal-dialog modal-dialog-zoom modal-dialog-centered">
        <div class="modal-content" style="background-color:#ffffff;
                     background-image: url('https://metro-market.ps/public/assets/img/bg-card.svg');
                     background-repeat:no-repeat;
                     background-position:100% 100%;
                     background-size: cover">
            <div class="modal-header border-0">
                <a class="d-block mx-auto w-100" href="#">
                    <img src="https://metro-market-ps2.s3.us-east-1.amazonaws.com/uploads/all/A3OAorVbgUACtYcOxb976vcR1cNV7ka0iuSHI3cm.png" alt="Metro Market" class="img-fluid d-block m-auto" style="width: 9.944rem;">
                </a>
                <button id="closeLogin" style="border: 0px;background: none !important" type="button" class="close" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <h6 class="modal-title fw-600 text-center">login</h6>
                <div style="display: none; " class="alert  login_result"></div>
                <div class="p-3">
                    <form id="sendForm" class="form-default" role="form" autocomplete="on">
                        @csrf

                        <div class="form-group phone-form-group">
                            <label for="phone-code">Email</label>
                            <div class="iti iti--allow-dropdown iti--separate-dial-code">
                                <div class="iti__flag-container">
                                    <div class="iti__selected-flag" role="combobox" aria-owns="country-listbox" aria-expanded="false" tabindex="0" title="email" aria-activedescendant="iti-item-ps">

                                    </div>

                                </div>
                                <input required=""  type="email" class="form-control" placeholder="email"  name="email" >
                            </div>
                        </div>



                        <div class="form-group" style="margin-top: 10px;">
                            <label for="password">password</label>
                            <input type="password" required="" class="form-control " placeholder="password" name="password" id="password">
                        </div>

                        <div  class="row mb-2" style="margin-top: 10px;">
                            <div class="col-6">
                                <label class="aiz-checkbox">
                                    <input type="checkbox" name="remember">
                                    <span class="opacity-60">remember me</span>
                                    <span class="aiz-square-check"></span>
                                </label>
                            </div>
                            <div class="col-6 text-right" style="text-align: right;">
                                <a href="{{ route('resetPasswordPage') }}"  class="text-reset opacity-60 fs-14">forget password ?</a>
                            </div>
                        </div>

                        <div class="mb-5">
                            <button id="sendButton" style="margin-top: 10px;width: 100%;margin-bottom: -20px" class="btn btn-danger btn-block fw-600">login</button>
                        </div>
                    </form>

                </div>
                <div class="text-center mb-3">
                    <p class="text-muted mb-0">do you have account ?</p>
                    <a href="{{ route('Route_register') }}" style="color:red;text-decoration: none" >register now</a>
                </div>
            </div>
        </div>
    </div>
</div>



<div id="d1" >
    <div id="d1_d1" class=" d-flex flex-column flex-md-row justify-content-between">
        <div class=" d-none d-md-inline-block w-25 ">
            <div  class="  d-md-inline-block  ">
                <a id="loginIcon" style="text-align: right; width: 150px; text-decoration: none; color: black; ">تسجيل الدخول
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                    </svg>
                </a>

            </div>
            <div class="  d-md-inline-block  w-25 ttt">
                <p style="text-align: center; ">
                    <span id="sb1">سلتي</span>
                    <span id="sb2" >₪0.00</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket3-fill" viewBox="0 0 16 16">
                        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.468 15.426.943 9h14.114l-1.525 6.426a.75.75 0 0 1-.729.574H3.197a.75.75 0 0 1-.73-.574z"/>
                        <span id="iconB" >0</span>
                    </svg>


                </p>
            </div>
            <div style="text-align: center; " class="  d-md-inline-block w-25 ttt">
                <span id="iconH" >0</span>
                <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                </svg>
            </div>
        </div>
        <div class="py-2 d-none d-md-inline-block w-50" style="text-align: right;">
            <input id="sershFor" class="material-icons color-primary d-none d-lg-block" placeholder="... ابحث عن ما تريد">
            </input>

            <svg id="sershIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </div>
        <div class="py-2 d-none d-md-inline-block w-25"><img  src=" {{ \Illuminate\Support\Facades\URL::asset('MainPage/logo.PNG')  }} " style="text-align: left; "></img></div>
    </div>
    <div class="bg-white header_menu_labels border-bottom d-none d-lg-block closed h-25">

        <ul id="ul_1" class="nav justify-content-end">
            <li  class="nav-item">
                <a  class="nav-link  li_a" href="#"  >اتصل بنا</a>
                <div class="linkLine" id="bnb" ></div>
            </li>
            <li class="nav-item">
                <a class="nav-link li_a" href="#">من نحن </a>
                <div class="linkLine" ></div>
            </li>
            <li class="nav-item">
                <a class="nav-link li_a" href="#">الوصفات</a>
                <div class="linkLine" ></div>
            </li>
            <li class="nav-item">
                <a class="nav-link li_a" href="#">الاكثر مبيعا</a>
                <div class="linkLine" ></div>
            </li>
            <li class="nav-item">
                <a class="nav-link li_a" href="#">العروض </a>
                <div class="linkLine" ></div>
            </li>
            <li class="nav-item">
                <a class="nav-link li_a" href="#">وصل حديثا</a>
                <div class="linkLine" ></div>
            </li>
            <li class="nav-item">
                <a class="nav-link li_a" href="#">الرئيسية</a>
                <div class="linkLine" ></div>
            </li>


            <li class="nav-item dropdown">
                <div class="dropdown show">
                    <a class="nav-link dropdown-toggle   dropdown-toggle li_a" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" href="#">الاقسام</a>
                    <div class="linkLine" ></div>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>




</div>

@yield('content')

    <div id="infodd" style="width: 100%;height: 500px; background-color: #141414;" >
        <div class="container" style="position: relative;">
            <div class="infoD mt-5" style=" float: right; text-align: right; width: 500px;">
                <img src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/logo2.JPG')  }}" alt="" style="float: right;">
                <br><br><br><br>
                <div style="color: white;">أول مركز تسوق في قطاع غزة ،فيه أجود المنتجات بأسعار منافسة.<br>
                    #مترو_ماركت<br>
                    #تسوق_بلا_حدود<br>
                </div>
                <div>
                    <button type="button" class="btn btn-danger">الاشتراك</button>
                    <input placeholder="عنوان بريدك الالكتروني"></input>
                </div>
            </div>
            <div class="infoD mt-5 "style="  float: right;width: 300px;">
                <span style="color: red;">معلومات الاتصال</span>
                <br><br>
                <span >عنوان:</span><br>
                <span >غزة - شارع الشهداء - غرب أصدقاء المريض</span>
                <br><br>
                <span >رقم الهاتف:</span><br>
                <span >08-28866671</span>
                <br><br>
                <span >البريد الإلكتروني:</span>
                <span ><br>
                           <a style="text-decoration: none;" href="mailto:info@metro-market.ps" class="text-reset">info@metro-market.ps</a>
                        </span>
                <br>
            </div>
            <div class="infoD mt-5 "style="; float: right;width: 200px;">
                <span style="color: red;">معلومات الاتصال</span>
                <br><br>
                <span >المواد الغذائية</span><br>
                <span >الخضروات والفواكه </span><br>
                <span >الألبان والأجبان</span><br>
                <span >المجمدات</span><br>
                <span >الوصفات</span><br>

            </div>
            <div class="infoD  mt-5 "style="; float: right;width: 200px;">
                <span style="color: red;">حسابي </span>
                <br><br>
                <span >تسجيل الدخول </span><br>
                <span >تاريخ الطلب   </span><br>
                <span >قائمة الرغبات </span><br>
                <span >تتبع الطلب</span><br>

            </div>

        </div>
        <div id="lsteD" class="container" >

            <img src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/Facebook_icon.png')  }}"  style="background-color: rgb(31, 28, 199);" ><a href="facebook.com"></a></img>
            <img src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/Instagram_icon.png')  }}"  style="background-color: rgb(197, 78, 171);" ><a href="instgram.com"></a></img>
            <img src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/tiktok.png')  }}"  style="background-color: rgb(225, 225, 232);" ><a href="tiktok.com"></a></img>

        </div>

    </div>



</body>
</html>




