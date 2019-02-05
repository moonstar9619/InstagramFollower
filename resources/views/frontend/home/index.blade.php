@extends('layouts.frontend')
@section('content')

@include('frontend.partials.nav')

    <div class=" single-item-rtl container">
        <div class="slider">
            <a href="">
                <img src="images/slider1.jpg"/>
            </a>
        </div>
        <div class="slider">
            <a href="">
                <img src="images/slider2.jpg"/>
            </a>
        </div>
        <div class="slider">
            <a href="">
                <img src="images/slider3.jpg"/>
            </a>
        </div>
        <div class="slider">
            <a href="">
                <img src="images/slider4.jpg"/>
            </a>
        </div>
    </div>

    <div class="container circle">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 circle1">
                <a href=""> <img src="images/Instagram-Persian-Follower.png"/></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 circle1">
                <a href=""> <img src="images/Instagram-Persian-Comment.png"/></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 circle1">
                <a href=""> <img src="images/Instagram-Video-View.png"/></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 circle1">
                <a href=""> <img src="images/Instagram-Persian-Like.png"/></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 circle1">
                <a href=""> <img src="images/Instagram-Foreign-Like.png"/></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 circle1">
                <a href=""> <img src="images/Instagram-MultiLike.png"/></a>
            </div>
        </div>
    </div>

    <div class="container cost">

        <h2>فالوور اینستاگرام ایرانی - سرور 1 - سرعت متوسط</h2>
        <div class="row">

            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>200 فالوور ایرانی</h3>
                    <div class="cost1">2000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">بدون نیاز به فالو کردن دیگران</li>
                            <li class="list-group-item">حاوی فالوور واقعی</li>
                            <li class="list-group-item">ریزش ب دلیل وجود فالوور واقعی</li>
                            <li class="list-group-item">50 الی 300%زیر قیمت بازار!</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>500 فالوور ایرانی</h3>
                    <div class="cost1">5000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">بدون نیاز به فالو کردن دیگران</li>
                            <li class="list-group-item">حاوی فالوور واقعی</li>
                            <li class="list-group-item">ریزش ب دلیل وجود فالوور واقعی</li>
                            <li class="list-group-item">50 الی 300%زیر قیمت بازار!</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>1000 فالوور ایرانی</h3>
                    <div class="cost1">8000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">بدون نیاز به فالو کردن دیگران</li>
                            <li class="list-group-item">حاوی فالوور واقعی</li>
                            <li class="list-group-item">ریزش ب دلیل وجود فالوور واقعی</li>
                            <li class="list-group-item">50 الی 300%زیر قیمت بازار!</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>2000 فالوور ایرانی</h3>
                    <div class="cost1">16000 تومان</div>
                    <div class="card-block">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">بدون نیاز به فالو کردن دیگران</li>
                            <li class="list-group-item">حاوی فالوور واقعی</li>
                            <li class="list-group-item">ریزش ب دلیل وجود فالوور واقعی</li>
                            <li class="list-group-item">50 الی 300%زیر قیمت بازار!</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>

        </div>

        <h2>فالوور اینستاگرام ایرانی -- سرور 2 - با کیفیت - سرعت زیاد</h2>
        <div class="row">

            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>1000 فالوور ایرانی</h3>
                    <div class="cost1">10000 تومان</div>
                    <div class="card-block">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">بدون نیاز به فالو کردن دیگران</li>
                            <li class="list-group-item">حاوی فالوور واقعی</li>
                            <li class="list-group-item">ریزش ب دلیل وجود فالوور واقعی</li>

                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>2000 فالوور ایرانی</h3>
                    <div class="cost1">20000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">بدون نیاز به فالو کردن دیگران</li>
                            <li class="list-group-item">حاوی فالوور واقعی</li>
                            <li class="list-group-item">ریزش ب دلیل وجود فالوور واقعی</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>3000 فالوور ایرانی</h3>
                    <div class="cost1">30000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">بدون نیاز به فالو کردن دیگران</li>
                            <li class="list-group-item">حاوی فالوور واقعی</li>
                            <li class="list-group-item">ریزش ب دلیل وجود فالوور واقعی</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>5000 فالوور ایرانی</h3>
                    <div class="cost1">50000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">بدون نیاز به فالو کردن دیگران</li>
                            <li class="list-group-item">حاوی فالوور واقعی</li>
                            <li class="list-group-item">ریزش ب دلیل وجود فالوور واقعی</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>

        </div>

        <h2>فالوور اینستاگرام - ایرانی سرور 3 - با کیفیت - پرسرعت</h2>
        <div class="row">

            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>2k فالوور ایرانی</h3>
                    <div class="cost1">30000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">بدون نیاز به فالو کردن دیگران</li>
                            <li class="list-group-item">تا 40% حاوی فالوور واقعی</li>
                            <li class="list-group-item">ریزش ب دلیل وجود فالوور واقعی</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>5k فالوور ایرانی</h3>
                    <div class="cost1">75000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">بدون نیاز به فالو کردن دیگران</li>
                            <li class="list-group-item">تا 40% حاوی فالوور واقعی</li>
                            <li class="list-group-item">ریزش ب دلیل وجود فالوور واقعی</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>8k فالوور ایرانی</h3>
                    <div class="cost1">120000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع چند دقیقه بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">بدون نیاز به فالو کردن دیگران</li>
                            <li class="list-group-item">تا 40% حاوی فالوور واقعی</li>
                            <li class="list-group-item">ریزش ب دلیل وجود فالوور واقعی</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>10k فالوور ایرانی</h3>
                    <div class="cost1">145000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع چند دقیقه بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">بدون نیاز به فالو کردن دیگران</li>
                            <li class="list-group-item">تا 40% حاوی فالوور واقعی</li>
                            <li class="list-group-item">ریزش ب دلیل وجود فالوور واقعی</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <h2>فالوور اینستاگرام - ایرانی سرور 4 - با کیفیت - فوق سریع - سرعت ارسال تا 20k در روز</h2>
        <div class="row">

            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>20k فالوور ایرانی</h3>
                    <div class="cost1">280000 تومان</div>
                    <div class="card-block">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع چند دقیقه بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">بدون نیاز به فالو کردن دیگران</li>
                            <li class="list-group-item">تا 40% حاوی فالوور واقعی</li>
                            <li class="list-group-item">ریزش ب دلیل وجود فالوور واقعی</li>
                            <li class="list-group-item">ارسال فالوور جبرانی تا 20%</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>30k فالوور ایرانی</h3>
                    <div class="cost1">414000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع چند دقیقه بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">بدون نیاز به فالو کردن دیگران</li>
                            <li class="list-group-item">تا 40% حاوی فالوور واقعی</li>
                            <li class="list-group-item">ریزش ب دلیل وجود فالوور واقعی</li>
                            <li class="list-group-item">ارسال فالوور جبرانی تا 20%</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>40k فالوور ایرانی</h3>
                    <div class="cost1">536000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع چند دقیقه بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">بدون نیاز به فالو کردن دیگران</li>
                            <li class="list-group-item">تا 40% حاوی فالوور واقعی</li>
                            <li class="list-group-item">ریزش ب دلیل وجود فالوور واقعی</li>
                            <li class="list-group-item">ارسال فالوور جبرانی تا 20%</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>50k فالوور ایرانی</h3>
                    <div class="cost1">660000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع چند دقیقه بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">بدون نیاز به فالو کردن دیگران</li>
                            <li class="list-group-item">تا 40% حاوی فالوور واقعی</li>
                            <li class="list-group-item">ریزش ب دلیل وجود فالوور واقعی</li>
                            <li class="list-group-item">ارسال فالوور جبرانی تا 20%</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>

        </div>

        <h2>لایک واقعی ایرانی - سرعت بالا</h2>
        <div class="row">

            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>500 لایک ایرانی</h3>
                    <div class="cost1">3000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">دارای لایک هدیه</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">ضمانت بازگشت وجه</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">امکان لایک فقط یک عکس</li>
                            <li class="list-group-item">فقط ادرس عکس وارد شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>1000 لایک ایرانی</h3>
                    <div class="cost1">5000 تومان</div>
                    <div class="card-block">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">دارای لایک هدیه</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">ضمانت بازگشت وجه</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">امکان لایک فقط یک عکس</li>
                            <li class="list-group-item">فقط ادرس عکس وارد شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>2000 لایک ایرانی</h3>
                    <div class="cost1">10000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">دارای لایک هدیه</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">ضمانت بازگشت وجه</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">امکان لایک فقط یک عکس</li>
                            <li class="list-group-item">فقط ادرس عکس وارد شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>3000 لایک ایرانی</h3>
                    <div class="cost1">15000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">دارای لایک هدیه</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">ضمانت بازگشت وجه</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">امکان لایک فقط یک عکس</li>
                            <li class="list-group-item">فقط ادرس عکس وارد شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>

        </div>

        <h2>لایک خارجی - * قیمت تعداد بالاتر در بخش مربوطه موجود است</h2>
        <div class="row">

            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>1000 لایک خارجی</h3>
                    <div class="cost1">3000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">ضمانت بازگشت وجه</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">امکان لایک فقط یک عکس</li>
                            <li class="list-group-item">فقط ادرس عکس وارد شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>2000 لایک خارجی</h3>
                    <div class="cost1">5000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">ضمانت بازگشت وجه</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">امکان لایک فقط یک عکس</li>
                            <li class="list-group-item">فقط ادرس عکس وارد شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>3000 لایک خارجی</h3>
                    <div class="cost1">10000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">ضمانت بازگشت وجه</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">امکان لایک فقط یک عکس</li>
                            <li class="list-group-item">فقط ادرس عکس وارد شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>4000 لایک خارجی</h3>
                    <div class="cost1">15000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">ضمانت بازگشت وجه</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">امکان لایک فقط یک عکس</li>
                            <li class="list-group-item">فقط ادرس عکس وارد شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>

        </div>

        <h2>بازدید و ویو ویدئو اینستاگرام - سرعت طبیعی</h2>
        <div class="row">

            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>1k ویو اینستاگرام</h3>
                    <div class="cost1">2000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">ضمانت بازگشت وجه</li>
                            <li class="list-group-item">لطفا فقط ادرس ویدئو ثبت شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>10k ویو اینستاگرام</h3>
                    <div class="cost1">10000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">ضمانت بازگشت وجه</li>
                            <li class="list-group-item">لطفا فقط ادرس ویدئو ثبت شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>5k ویو اینستاگرام</h3>
                    <div class="cost1">20000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">ضمانت بازگشت وجه</li>
                            <li class="list-group-item">لطفا فقط ادرس ویدئو ثبت شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>50k ویو اینستاگرام</h3>
                    <div class="cost1">50000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">ضمانت بازگشت وجه</li>
                            <li class="list-group-item">لطفا فقط ادرس ویدئو ثبت شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>

        </div>

        <h2>لایک واقعی ایرانی - سرعت بالا</h2>
        <div class="row">

            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>5000 لایک ایرانی</h3>
                    <div class="cost1">24000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">دارای لایک هدیه</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">ضمانت بازگشت وجه</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">امکان لایک فقط یک عکس</li>
                            <li class="list-group-item">فقط ادرس عکس وارد شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>8000 لایک ایرانی</h3>
                    <div class="cost1">34000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">دارای لایک هدیه</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">ضمانت بازگشت وجه</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">امکان لایک فقط یک عکس</li>
                            <li class="list-group-item">فقط ادرس عکس وارد شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>10000 لایک ایرانی</h3>
                    <div class="cost1">40000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">دارای لایک هدیه</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">ضمانت بازگشت وجه</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">امکان لایک فقط یک عکس</li>
                            <li class="list-group-item">فقط ادرس عکس وارد شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>60000 لایک ایرانی</h3>
                    <div class="cost1">2000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">دارای لایک هدیه</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">ضمانت بازگشت وجه</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">امکان لایک فقط یک عکس</li>
                            <li class="list-group-item">فقط ادرس عکس وارد شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>

        </div>

        <h2>لایک واقعی ایرانی - سرعت طبیعی</h2>
        <div class="row">

            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>100 لایک ایرانی</h3>
                    <div class="cost1">2000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">دارای لایک هدیه</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">ضمانت بازگشت وجه</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">امکان لایک فقط یک عکس</li>
                            <li class="list-group-item">فقط ادرس عکس وارد شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>250 لایک ایرانی</h3>
                    <div class="cost1">2000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">دارای لایک هدیه</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">ضمانت بازگشت وجه</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">امکان لایک فقط یک عکس</li>
                            <li class="list-group-item">فقط ادرس عکس وارد شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>500 لایک ایرانی</h3>
                    <div class="cost1">2000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">دارای لایک هدیه</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">ضمانت بازگشت وجه</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">امکان لایک فقط یک عکس</li>
                            <li class="list-group-item">فقط ادرس عکس وارد شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>1000 لایک ایرانی</h3>
                    <div class="cost1">2000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">دارای لایک هدیه</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">ضمانت بازگشت وجه</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">امکان لایک فقط یک عکس</li>
                            <li class="list-group-item">فقط ادرس عکس وارد شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>

        </div>

        <h2>مولتی لایک ایرانی - تقسیم لایک بین 5 پست آخر</h2>
        <div class="row">

            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>1000 مولتی لایک ایرانی</h3>
                    <div class="cost1">12000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">شروع تا چند ساعت بعد از سفارش</li>
                            <li class="list-group-item">شروع تا چند ساعت بعد از سفارش</li>
                            <li class="list-group-item">تقسیم بین پست ها آخر</li>
                            <li class="list-group-item">برای 5 پست آخر هر عکس 200 لایک</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>2500 مولتی لایک ایرانی</h3>
                    <div class="cost1">30000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">شروع تا چند ساعت بعد از سفارش</li>
                            <li class="list-group-item">شروع تا چند ساعت بعد از سفارش</li>
                            <li class="list-group-item">تقسیم بین پست ها آخر</li>
                            <li class="list-group-item">برای 5 پست آخر هر عکس 500 لایک</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>5000 مولتی لایک ایرانی</h3>
                    <div class="cost1">50000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">شروع تا چند ساعت بعد از سفارش</li>
                            <li class="list-group-item">شروع تا چند ساعت بعد از سفارش</li>
                            <li class="list-group-item">تقسیم بین پست ها آخر</li>
                            <li class="list-group-item">برای 5 پست آخر هر عکس 1000 لایک</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>10000 مولتی لایک ایرانی</h3>
                    <div class="cost1">100000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">شروع تا چند ساعت بعد از سفارش</li>
                            <li class="list-group-item">شروع تا چند ساعت بعد از سفارش</li>
                            <li class="list-group-item">تقسیم بین پست ها آخر</li>
                            <li class="list-group-item">برای 5 پست آخر هر عکس 2000 لایک</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>

        </div>

        <h2>بازدید استوری اینستاگرام - سرعت طبیعی</h2>
        <div class="row">

            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>1k بازدید استوری</h3>
                    <div class="cost1">10000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">صفحه عمومی باشد</li>
                            <li class="list-group-item">لطفا فقط یوزرنیم ثبت شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>10k بازدید استوری</h3>
                    <div class="cost1">90000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">صفحه عمومی باشد</li>
                            <li class="list-group-item">لطفا فقط یوزرنیم ثبت شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>20k بازدید استوری</h3>
                    <div class="cost1">160000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">صفحه عمومی باشد</li>
                            <li class="list-group-item">لطفا فقط یوزرنیم ثبت شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>100k بازدید استوری</h3>
                    <div class="cost1">700000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">شروع آنی بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">صفحه عمومی باشد</li>
                            <li class="list-group-item">لطفا فقط یوزرنیم ثبت شود</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>

        </div>

        <h2>لایک ایرانی اتوماتیک - تقسیم لایک تا 5 پست آتی</h2>
        <div class="row">

            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>1000 لایک اتوماتیک ایرانی</h3>
                    <div class="cost1">15000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">شروع تا چند دقیقه بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">تقسیم تعداد لایک بین پست های آتی</li>
                            <li class="list-group-item">برای 5 پست آتی هر عکس 200 لایک</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>2500 لایک اتوماتیک ایرانی</h3>
                    <div class="cost1">30000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">شروع تا چند دقیقه بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">تقسیم تعداد لایک بین پست های آتی</li>
                            <li class="list-group-item">برای 5 پست آتی هر عکس 500 لایک</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>5000 لایک اتوماتیک ایرانی</h3>
                    <div class="cost1">50000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">شروع تا چند دقیقه بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">تقسیم تعداد لایک بین پست های آتی</li>
                            <li class="list-group-item">برای 5 پست آتی هر عکس 1000 لایک</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>10000 لایک اتوماتیک ایرانی</h3>
                    <div class="cost1">100000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">شروع تا چند دقیقه بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">تقسیم تعداد لایک بین پست های آتی</li>
                            <li class="list-group-item">برای 5 پست آتی هر عکس 2000 لایک</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>

        </div>

        <h2>لایک ایرانی اتوماتیک - تقسیم لایک تا 10 پست آتی</h2>
        <div class="row">

            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>2000 لایک اتوماتیک ایرانی</h3>
                    <div class="cost1">30000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">شروع تا چند دقیقه بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">تقسیم تعداد لایک بین پست های آتی</li>
                            <li class="list-group-item">برای 10 پست آتی هر عکس 200 لایک</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>5000 لایک اتوماتیک ایرانی</h3>
                    <div class="cost1">60000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">شروع تا چند دقیقه بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">تقسیم تعداد لایک بین پست های آتی</li>
                            <li class="list-group-item">برای 10 پست آتی هر عکس 500 لایک</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>10000 لایک اتوماتیک ایرانی</h3>
                    <div class="cost1">100000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">شروع تا چند دقیقه بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">تقسیم تعداد لایک بین پست های آتی</li>
                            <li class="list-group-item">برای 10 پست آتی هر عکس 1000 لایک</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col col-sm-6 -md-3 col-lg-3">
                <div class="card card-block">
                    <h3>20000 لایک اتوماتیک ایرانی</h3>
                    <div class="cost1">200000 تومان</div>
                    <div class="card-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">لایک توسط پروفایل های ایرانی واقعی</li>
                            <li class="list-group-item">بدون نیاز به پسورد</li>
                            <li class="list-group-item">شروع تا چند دقیقه بعد از سفارش</li>
                            <li class="list-group-item">بدون نیاز به لایک کردن دیگران</li>
                            <li class="list-group-item">تقسیم تعداد لایک بین پست های آتی</li>
                            <li class="list-group-item">برای 10 پست آتی هر عکس 2000 لایک</li>
                        </ul>
                        @if(!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-primary">ثبت سفارش</a>
                        @else
                            <a href="{{ route('frontend.order.create') }}" class="btn btn-primary">ثبت سفارش</a>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container services">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 services1">
                        <img src="images/1.jpg"/>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <h4>سرور های قدرتمند</h4>
                        <p>در سایت تمامی سفارش‌های مشتریان در کمتر از 48 ساعت پردازش شده و کارهای مورد نظر اغاز خواهد
                            شد.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 services1">
                        <img src="images/2.jpg"/>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <h4>قیمت های باورنکردنی</h4>
                        <p>تمامی خدمات با قیمت مناسب عرضه میشوند تا خریدی لذت بخش را برای مشتریان فراهم کنند.باور
                            نمیکنید ؟ مقایسه کنید!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 services1">
                        <img src="images/4.jpg"/>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <h4>نکات مهم</h4>
                        <p>اینستا سفارش درباره کیفیت محصولات خود ضمانت کرده</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 services1">
                        <img src="images/3.jpg"/>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <h4>پشتیبانی</h4>
                        <p>تیم پشتیبانی 24 ساعته و 7 روز هفته پاسخگو سوالات و مشکلات کاربران است.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mojavez">
        <h3 class="section-title">

            مجوزهای ما

        </h3>
        <div class="row ">

            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                <img width="125" height="136" src="images/namad.png"/>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
                 data-wow-delay="300ms">
                <img width="150" height="150" id='apfujxlznbqeapfurgvj' src="images/samandehi.png"/>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
                 data-wow-delay="600ms">
                <img width="130" height="123" src="images/anjoman.png" alt="مجوز"/>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
                 data-wow-delay="900ms">
                <img width="130" height="123" src="images/melat.png" alt="مجوز"/>
            </div>
        </div>
    </div>


@endsection