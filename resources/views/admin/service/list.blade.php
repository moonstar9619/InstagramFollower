@extends('layouts.admin')
@section('content')
    @include('admin.partials.success')
    <table class="table table-hover table-responsive">
        <thead>
        @include('admin.service.items')
        </thead>
        <tbody>
        @if($services && count($services)>0)
            @foreach($services as $service)
                @include('admin.service.columns', $service)
            @endforeach
        @else
            @include('admin.service.no-item')
        @endif
        </tbody>
    </table>
@endsection