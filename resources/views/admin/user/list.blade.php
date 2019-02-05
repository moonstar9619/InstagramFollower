@extends('layouts.admin')
@section('content')
    @include('admin.partials.success')
    <table class="table table-hover table-responsive">
        <thead>
        @include('admin.user.items')
        </thead>
        <tbody>
        @if($users && count($users)>0)
            @foreach($users as $user)
                @include('admin.user.columns', $user)
            @endforeach
        @else
            @include('admin.user.no-item')
        @endif
        </tbody>
    </table>
@endsection