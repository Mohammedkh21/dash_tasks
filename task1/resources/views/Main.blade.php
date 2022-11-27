@extends('Main_layout.HederAndFooter')


@section('content')

<div>
    <!-- <div >
        <img style="height: 100% ;width: 100%;" src="photo.jpg" alt="">
    </div> -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/photo.jpg')  }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/photo.jpg')  }}" class="d-block w-100" alt="...">
            </div>

        </div>
    </div>
</div>


<div class="container  mt-5 mb-5" style="height: 2900px;" >

    <div style="height: 600px; position: relative; margin-top: 30px;">
        <div style="height: 50px;">
            <span id="s1"> عروض يومية </span> <span class="s2" class="mt-3">  عرض المزيد  </span>
        </div>
        <div class="card " style="width: 18rem;">
            <img  src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/p1.jpg')  }}"  class="card-img-top" >
            <div class="card-body">
                <h5 class="card-title">10.00</h5>
                <p class="card-text">بطاطا شيبس</p>
                <div style="width: 200px;">

                    <ul class="list-group list-group-horizontal">
                        <a href="#"  class="btn btn-primary cardB">اضافة</a>
                        <li class="list-group-item">+</li>
                        <li class="list-group-item">1</li>
                        <li class="list-group-item">-</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card " style="width: 18rem;">
            <img src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/p1.jpg')  }}"  class="card-img-top" >
            <div class="card-body">
                <h5 class="card-title">10.00</h5>
                <p class="card-text">بطاطا شيبس</p>
                <div style="width: 200px;">

                    <ul class="list-group list-group-horizontal">
                        <a href="#"  class="btn btn-primary cardB">اضافة</a>
                        <li class="list-group-item">+</li>
                        <li class="list-group-item">1</li>
                        <li class="list-group-item">-</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card " style="width: 18rem;">
            <img src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/p1.jpg')  }}" class="card-img-top" >
            <div class="card-body">
                <h5 class="card-title">10.00</h5>
                <p class="card-text">بطاطا شيبس</p>
                <div style="width: 200px;">

                    <ul class="list-group list-group-horizontal">
                        <a href="#"  class="btn btn-primary cardB">اضافة</a>
                        <li class="list-group-item">+</li>
                        <li class="list-group-item">1</li>
                        <li class="list-group-item">-</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card " style="width: 18rem;">
            <img src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/p1.jpg')  }}" class="card-img-top" >
            <div class="card-body">
                <h5 class="card-title">10.00</h5>
                <p class="card-text">بطاطا شيبس</p>
                <div style="width: 200px;">

                    <ul class="list-group list-group-horizontal">
                        <a href="#"  class="btn btn-primary cardB">اضافة</a>
                        <li class="list-group-item">+</li>
                        <li class="list-group-item">1</li>
                        <li class="list-group-item">-</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div style="height: 600px; position: relative; margin-top: 30px;">
        <div style="height: 50px; margin-top: 30px;">
            <span id="s1"> وصل حديثا  </span> <span class="s2" class="mt-3">  عرض المزيد  </span>
        </div>
        <div class="card " style="width: 18rem;">
            <img src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/p1.jpg')  }}" class="card-img-top" >
            <div class="card-body">
                <h5 class="card-title">10.00</h5>
                <p class="card-text">بطاطا شيبس</p>
                <div style="width: 200px;">

                    <ul class="list-group list-group-horizontal">
                        <a href="#"  class="btn btn-primary cardB">اضافة</a>
                        <li class="list-group-item">+</li>
                        <li class="list-group-item">1</li>
                        <li class="list-group-item">-</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card " style="width: 18rem;">
            <img src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/p1.jpg')  }}" class="card-img-top" >
            <div class="card-body">
                <h5 class="card-title">10.00</h5>
                <p class="card-text">بطاطا شيبس</p>
                <div style="width: 200px;">

                    <ul class="list-group list-group-horizontal">
                        <a href="#"  class="btn btn-primary cardB">اضافة</a>
                        <li class="list-group-item">+</li>
                        <li class="list-group-item">1</li>
                        <li class="list-group-item">-</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card " style="width: 18rem;">
            <img src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/p1.jpg')  }}" class="card-img-top" >
            <div class="card-body">
                <h5 class="card-title">10.00</h5>
                <p class="card-text">بطاطا شيبس</p>
                <div style="width: 200px;">

                    <ul class="list-group list-group-horizontal">
                        <a href="#"  class="btn btn-primary cardB">اضافة</a>
                        <li class="list-group-item">+</li>
                        <li class="list-group-item">1</li>
                        <li class="list-group-item">-</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card " style="width: 18rem;">
            <img src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/p1.jpg')  }}" class="card-img-top" >
            <div class="card-body">
                <h5 class="card-title">10.00</h5>
                <p class="card-text">بطاطا شيبس</p>
                <div style="width: 200px;">

                    <ul class="list-group list-group-horizontal">
                        <a href="#"  class="btn btn-primary cardB">اضافة</a>
                        <li class="list-group-item">+</li>
                        <li class="list-group-item">1</li>
                        <li class="list-group-item">-</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div style="height: 600px; position: relative; margin-top: 30px;">
        <div style="height: 50px; margin-top: 30px;">
            <span id="s1"> افضل المبيعات   </span> <span class="s2" class="mt-3">  عرض المزيد  </span>
        </div>
        <div class="card " style="width: 18rem;">
            <img src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/p1.jpg')  }}" class="card-img-top" >
            <div class="card-body">
                <h5 class="card-title">10.00</h5>
                <p class="card-text">بطاطا شيبس</p>
                <div style="width: 200px;">

                    <ul class="list-group list-group-horizontal">
                        <a href="#"  class="btn btn-primary cardB">اضافة</a>
                        <li class="list-group-item">+</li>
                        <li class="list-group-item">1</li>
                        <li class="list-group-item">-</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card " style="width: 18rem;">
            <img src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/p1.jpg')  }}" class="card-img-top" >
            <div class="card-body">
                <h5 class="card-title">10.00</h5>
                <p class="card-text">بطاطا شيبس</p>
                <div style="width: 200px;">

                    <ul class="list-group list-group-horizontal">
                        <a href="#"  class="btn btn-primary cardB">اضافة</a>
                        <li class="list-group-item">+</li>
                        <li class="list-group-item">1</li>
                        <li class="list-group-item">-</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card " style="width: 18rem;">
            <img src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/p1.jpg')  }}" class="card-img-top" >
            <div class="card-body">
                <h5 class="card-title">10.00</h5>
                <p class="card-text">بطاطا شيبس</p>
                <div style="width: 200px;">

                    <ul class="list-group list-group-horizontal">
                        <a href="#"  class="btn btn-primary cardB">اضافة</a>
                        <li class="list-group-item">+</li>
                        <li class="list-group-item">1</li>
                        <li class="list-group-item">-</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card " style="width: 18rem;">
            <img src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/p1.jpg')  }}" class="card-img-top" >
            <div class="card-body">
                <h5 class="card-title">10.00</h5>
                <p class="card-text">بطاطا شيبس</p>
                <div style="width: 200px;">

                    <ul class="list-group list-group-horizontal">
                        <a href="#"  class="btn btn-primary cardB">اضافة</a>
                        <li class="list-group-item">+</li>
                        <li class="list-group-item">1</li>
                        <li class="list-group-item">-</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div style=" height: 600px; position: relative; margin-top: 30px;">
        <div style="height: 50px; margin-top: 30px;">
            <span id="s1"> وصل حديثا  </span> <span class="s2" class="mt-3">   عرض المزيد </span>
        </div>
        <div class="card " style="width: 18rem;">
            <img src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/p1.jpg')  }}" class="card-img-top" >
            <div class="card-body">
                <h5 class="card-title">10.00</h5>
                <p class="card-text">بطاطا شيبس</p>
                <div style="width: 200px;">

                    <ul class="list-group list-group-horizontal">
                        <a href="#"  class="btn btn-primary cardB">اضافة</a>
                        <li class="list-group-item">+</li>
                        <li class="list-group-item">1</li>
                        <li class="list-group-item">-</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card " style="width: 18rem;">
            <img src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/p1.jpg')  }}" class="card-img-top" >
            <div class="card-body">
                <h5 class="card-title">10.00</h5>
                <p class="card-text">بطاطا شيبس</p>
                <div style="width: 200px;">

                    <ul class="list-group list-group-horizontal">
                        <a href="#"  class="btn btn-primary cardB">اضافة</a>
                        <li class="list-group-item">+</li>
                        <li class="list-group-item">1</li>
                        <li class="list-group-item">-</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card " style="width: 18rem;">
            <img src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/p1.jpg')  }}" class="card-img-top" >
            <div class="card-body">
                <h5 class="card-title">10.00</h5>
                <p class="card-text">بطاطا شيبس</p>
                <div style="width: 200px;">

                    <ul class="list-group list-group-horizontal">
                        <a href="#"  class="btn btn-primary cardB">اضافة</a>
                        <li class="list-group-item">+</li>
                        <li class="list-group-item">1</li>
                        <li class="list-group-item">-</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card " style="width: 18rem;">
            <img src="{{ \Illuminate\Support\Facades\URL::asset('MainPage/p1.jpg')  }}" class="card-img-top" >
            <div class="card-body">
                <h5 class="card-title">10.00</h5>
                <p class="card-text">بطاطا شيبس</p>
                <div style="width: 200px;">

                    <ul class="list-group list-group-horizontal">
                        <a href="#"  class="btn btn-primary cardB">اضافة</a>
                        <li class="list-group-item">+</li>
                        <li class="list-group-item">1</li>
                        <li class="list-group-item">-</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div style=" height: 500px; position: relative; margin-top: 30px;">
            <div style="height: 50px; margin-top: 30px;margin-bottom: 30px;">
                <span id="s1" st> تسوق حسب المطلوب    </span>
            </div>

            <div style="margin-right: 30px; float: right;width: 200px;" >
                <div style="border-radius: 100%; background-color: rgb(122, 122, 70);height:200px ;width: 200px;" ></div>
                <div >
                    <p style=" text-align: center; margin-top: 10px;" class="card-text">المواد الغذائية </p>
                </div>
            </div>
            <div style="margin-right: 30px; float: right;width: 200px;" >
                <div style="border-radius: 100%; background-color: green;height:200px ;width: 200px;" ></div>
                <div >
                    <p style=" text-align: center; margin-top: 10px;" class="card-text"> الخضروات و الفواكه </p>
                </div>
            </div>
            <div style="margin-right: 30px; float: right;width: 200px;" >
                <div style="border-radius: 100%; background-color: rgb(231, 238, 231);height:200px ;width: 200px;" ></div>
                <div >
                    <p style=" text-align: center; margin-top: 10px;" class="card-text">الالبان و الاجبان</p>
                </div>
            </div>
            <div style="margin-right: 30px; float: right;width: 200px;" >
                <div style="border-radius: 100%; background-color: rgb(136, 141, 136);height:200px ;width: 200px;" ></div>
                <div >
                    <p style=" text-align: center; margin-top: 10px;" class="card-text">المخبوزات و المعجنات</p>
                </div>
            </div>
            <div id="vb" style="margin-right: 30px; float: right;width: 200px;" >
                <div id="showMore"  >
                    <p style="color: white;font-size: 30px;margin: 0px;padding: 0px;">عرض المزيد</p>
                </div>

            </div>

        </div>
    </div>




</div>

@endsection

