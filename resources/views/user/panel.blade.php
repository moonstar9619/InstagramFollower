@extends('layouts.admin')
@section('content')
    @include('admin.partials.success')
    <div class="alert alert-primary" role="alert">
        <span style="font-weight: bold;color: peru;">{{ $userName }} عزیز</span>
        <span> به پنل کاربری سایت خرید فالور و لایک اینستاگرام خوش آمدید.</span>
    </div>
@endsection