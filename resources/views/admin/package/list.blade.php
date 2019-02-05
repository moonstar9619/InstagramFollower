@extends('layouts.admin')
@section('content')
    @include('admin.partials.success')
    <table class="table table-hover table-responsive">
        <thead>
        @include('admin.package.items')
        </thead>
        <tbody>
        @if($packages && count($packages)>0)
            @foreach($packages as $package)
                @include('admin.package.columns', $package)
            @endforeach
        @else
            @include('admin.package.no-item')
        @endif
        </tbody>
    </table>
@endsection