<nav class="navbar navbar-expand-lg navbar-dark custom-nav rounded-bottom">
    <a class="navbar-brand" href="http://instagram.sefaresh.net/">
        <small>instagram.sefaresh.net</small>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item active">
                @if(Auth::user()->isAdmin())
                    <a class="nav-link" href="{{ route('admin.dashboard') }}" target="_blank">داشبورد <span
                                class="sr-only">(current)</span></a>
                @else
                    <a class="nav-link" href="{{ route('user.panel') }}" target="_blank">پنل کاربری <span
                                class="sr-only">(current)</span></a>
                @endif
            </li>
            @if(Auth::user()->isAdmin())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.orders.list') }}">سفارشات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.transactions.list') }}">تراکنش ها</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        کاربران
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('admin.users.list') }}">لیست کاربران</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('admin.users.create') }}">افزودن کاربر جدید</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        پکیج ها
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('admin.packages.list') }}">لیست پکیج ها</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('admin.packages.create') }}">افزودن پکیج جدید</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        سرویس ها
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('admin.services.list') }}">لیست سرویس ها</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('admin.services.create') }}">افزودن سرویس جدید</a>
                    </div>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.orders.list') }}">سفارشات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.transactions.list') }}">تراکنش ها</a>
                </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    خروج
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</nav>