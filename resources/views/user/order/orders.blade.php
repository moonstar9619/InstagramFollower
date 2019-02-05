@extends('layouts.admin')
@section('content')
    <table class="table table-hover table-responsive">

        <thead>
        @include('user.order.items')
        </thead>
        <tbody>

        @if($userOrders && count($userOrders)>0)
            @foreach($userOrders as $userOrder)
                @include('user.order.columns', $userOrder)
            @endforeach
        @else
            @include('user.order.no-item')
        @endif
        </tbody>
    </table>
@endsection