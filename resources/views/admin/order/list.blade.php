@extends('layouts.admin')
@section('content')
    <table class="table table-hover table-responsive">
        <thead>
        @include('admin.order.items')
        </thead>
        <tbody>
        @if($userOrders && count($userOrders)>0)
            @foreach($userOrders as $userOrder)
                @include('admin.order.columns', $userOrder)
            @endforeach
        @else
            @include('admin.order.no-item')
        @endif
        </tbody>
    </table>
@endsection