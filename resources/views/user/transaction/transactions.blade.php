@extends('layouts.admin')
@section('content')
    <table class="table table-hover table-responsive">
        <thead>
        @include('user.transaction.items')
        </thead>
        <tbody>
        @if($transactions && count($transactions)>0)
            @foreach($transactions as $transaction)
                @include('user.transaction.columns', $transaction)
            @endforeach
        @else
            @include('user.transaction.no-item')
        @endif
        </tbody>
    </table>
@endsection