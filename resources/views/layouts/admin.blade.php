<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/bootstrap-rtl.min.css"/>
    <link rel="stylesheet" href="/css/style.css"/>
</head>
<body>
<div class="container">
   @include('admin.partials.nav')
</div>

<div class="container mt-5">
    <div class="container-fluid p-0 text-right bg-white rounded-top">
        <h5 class="custom-h5 rounded-top pr-3 pb-3 pt-2 custom-color">{{ isset($page_title)? $page_title:'' }}</h5>
        @yield('content')
    </div>
</div>


<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

</body>
</html>