@extends('lifestyle.layouts.admin')

@section('content')
<div class="container background-white">
    @if(isset($item))
    <br>
    <table class="table">
        <tbody>
            <tr>
                <td>id</td>
                <td>{{$item->id}}</td>
            </tr>
            <tr>
                <td>title</td>
                <td>{{$item->title}}</td>
            </tr>
            <tr>
                <td>url</td>
                <td>{{$item->url}}</td>
            </tr>
            <tr>
                <td>ico</td>
                <td>{{$item->ico}}</td>
            </tr>
            <tr>
                <td>parent</td>
                <td>{{ isset($item->parentMenu) ? $item->parentMenu->title . ' (id:' . $item->parentMenu->id . ')': ''}}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <div><a href="{{route('admin.menu.edit',['menu'=>$item->id])}}" class="btn btn-success">Edit</a></div>
    <br>
    @can('delete', $item)
        <form method="POST" action="{{route('admin.menu.destroy',['menu' => $item->id])}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    @endcan
    <br>
    @endif
</div>
@endsection