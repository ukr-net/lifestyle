@extends('lifestyle.layouts.admin')

@section('content')
<div class="container background-white">
    <ul class="horizontal-navbar">
        @include(env('THEME') . '.admin.menu.menu-items', ['items' => $menu->roots()])
    </ul>
    <br>
    <div><a href="{{route('admin.menu.create')}}" class="btn btn-success">New</a></div>
    <br>
</div>
@endsection