<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"><img src="images/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">صفحه اصلی <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    تعرفه های اینستاگرام
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">فالوور ایرانی اینستاگرام </a>
                    <a class="dropdown-item" href="#">لایک ایرانی اینستاگرام</a>
                    <a class="dropdown-item" href="#">لایک خارجی اینستاگرام</a>
                    <a class="dropdown-item" href="#">فالوور خارجی اینستاگرام</a>
                    <a class="dropdown-item" href="#">بازدید و ویو ویدئو اینستاگرام</a>
                    <a class="dropdown-item" href="#">کامنت رندوم ایرانی اینستاگرام</a>
                    <a class="dropdown-item" href="#">لایک آلبوم عکس اینستاگرام</a>
                    <a class="dropdown-item" href="#">خرید خارج کشور</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ثبت سفارش</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">وبلاگ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">نظرات مشتریان</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">پیگیری سفارش</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">کد تخفیف</a>
            </li>
            <li class="nav-item dropdown dmenu">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    تماس با ما
                </a>
                <div class="dropdown-menu sm-menu">
                    <a class="dropdown-item" href="#">تماس با ما</a>
                    <a class="dropdown-item" href="#">قوانین</a>
                    <a class="dropdown-item" href="#">کسب درآمد</a>
                </div>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">ورود</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">ثبت نام</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->phone }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            خروج
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    @if( Auth::user()->isAdmin() )
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">ورود به پنل</a>
                    @else
                        <a class="nav-link" href="{{ route('user.panel') }}">ورود به پنل</a>
                    @endif
                </li>
            @endguest

            {{--<li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">ورود</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">ثبت نام</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">ورود به پنل</a>
            </li>--}}

        </ul>


    </div>
</nav>