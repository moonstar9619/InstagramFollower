@extends('layouts.admin')
@section('content')
    <table class="table table-hover table-responsive">
        <thead>
        @include('admin.transaction.items')
        </thead>
        <tbody>
        @if($transactions && count($transactions)>0)
            @each('admin.transaction.columns',$transactions,'transaction','admin.transaction.no-item')
        @endif
        </tbody>
    </table>
@endsection